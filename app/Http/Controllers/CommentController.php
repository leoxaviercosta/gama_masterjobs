<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * @var Comment
     */
    private $comment;

    public function __construct(Comment $comment) {
        $this->comment = $comment;
    }

    public function register(Request $request) {
        $this->comment->create($request->all());
        return redirect()->route('home');
    }
}
