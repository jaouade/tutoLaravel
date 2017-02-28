<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Post;

class UpdatePostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
	    $post = Post::findOrFail($this->route('news'));

		return $post->user_id==1;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'title'=>'required|min:5 |aaaa:aze,aaa,aaa',
            'content'=>'required|min:10',
        ];
	}

}
