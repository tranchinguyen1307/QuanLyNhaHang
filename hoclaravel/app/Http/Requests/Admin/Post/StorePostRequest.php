<?php

namespace App\Http\Requests\Admin\Post;

use DOMDocument;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class StorePostRequest extends FormRequest
{
    /**
     * 
     *
     * @return bool
     */
    public function authorize()
    {

        return true;
    }

    /**
     *
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    /**
     *
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề là bắt buộc.',
            'title.string' => 'Tiêu đề phải là một chuỗi ký tự.',
            'title.max' => 'Tiêu đề không được vượt quá :max ký tự.',
            'content.required' => 'Nội dung là bắt buộc.',
            'content.string' => 'Nội dung phải là một chuỗi ký tự.',
            'avatar.image' => 'Ảnh đại diện phải là một tệp hình ảnh.',
            'avatar.mimes' => 'Ảnh đại diện phải có định dạng: :values.',
            'avatar.max' => 'Kích thước ảnh đại diện không được vượt quá :max KB.',
        ];
    }

    protected function passedValidation()
    {
        $this->postContent();
        $this->handleAvatar();
    }

    public function postContent()
    {
        $content =  $this->input('content');
        $dom = new DOMDocument();
        @ $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        /** @var \DOMElement $img */
        foreach ($images as $key => $img) {
            if (strpos($img->getAttribute('src'),'data:image/') ===0) {
            $src = $img->getAttribute('src');
            $data = base64_decode(explode(',', explode(';', $src)[1])[1]);
            $image_name = time() . $key . '.png';
            $filePath = 'public/images/post/content/' . $image_name;
            Storage::put($filePath, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', Storage::url('images/post/content/' . $image_name));
        }
        $this->merge(['content' => $dom->saveHTML()]);
    }}

    protected function handleAvatar()
    {
        if ($this->hasFile('avatar')) {
            $file = $this->file('avatar');
            $postTitle = $this->input('title');
            $normalPostTitle = preg_replace('/[^A-Za-z0-9_]/', '_', $postTitle);
            $timestamp = now()->timestamp;
            $extension = $file->getClientOriginalExtension();
            $fileName = "{$normalPostTitle}_{$timestamp}.{$extension}";
            $filePath = $file->storeAs('public/images/post/avatar', $fileName);
            $this->merge([
                'avatar' => $fileName,
            ]);
        }
        else {
            $postId = $this->route('id');
            $post = \App\Models\Admin\Post::findOrFail($postId);
            $this->merge([
                'avatar' => $post->avatar,
            ]);
        }
    }
}
