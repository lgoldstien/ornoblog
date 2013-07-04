<?php 

namespace App\Controller;

use Orno\Mvc\View\Renderer;
use App\Model\PostModel;

class Post
{
    protected $view;
    protected $model;
    protected $post;
    protected $postid;

    public function __construct(Renderer $view)
    {
        $this->view = $view;
    }

    public function singlePost($postid, $postname)
    {
        
        $this->postid = $postid;

        $this->model = new PostModel;
        $this->model->getPost($this->postid);
        $this->post = $this->model->result;
        
        $this->view->region('post_id', $this->postid);
        $this->view->region('post_title', $this->post['title']);
        $this->view->region('post_content', $this->post['content']);
        $this->view->region('post_author', $this->post['author']['nickname']);
        $this->view->region('post_author_id', $this->post['author']['id']);
        $this->view->region('post_date_created', $this->post['date_created']);

        $this->view->region('content', 'post/view');

        return $this->view->render();
    }
}
