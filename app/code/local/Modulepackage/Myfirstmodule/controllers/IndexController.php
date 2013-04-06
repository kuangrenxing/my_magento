<?php
class Modulepackage_Myfirstmodule_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
//     	print_r($_GET);
 
//    echo 'hello world';
//    $this->loadLayout();
//    $this->renderLayout();

    	$params = $this->getRequest()->getParams();
//     	print_r($params);
    	$blogpost = Mage::getModel('myfirstmodule/blogpost');
    	echo get_class($blogpost);
    	//print_r($blogpost);
    	echo ("Loading the blogpost with and ID of ".$params['id']);
    	$blogpost->load($params['id']);
 		$data = $blogpost->getData();
// 		var_dump($data);
    	print_r($data);
    	
    	echo $blogpost->getBlogpostId();
		echo $blogpost['title'];
    	
    }
    
    public function goodbyeAction() {
    	echo 'Goodbye World';
    	$this->loadLayout();
    	$this->renderLayout();
    }
 
    public function paramsAction() {
    	print_r($this->getRequest()->getParams());
    	echo '<dl>';
    	foreach ($this->getRequest()->getParams() as $key => $value) {
    		echo '<dt><strong>Param: </strong>'.$key.'</dt>';
    		echo '<dt><strong>Value: </strong>'.$value.'</dt>';
    	}
    	echo '</dl>';
    }
    
    public function testAction()
    {
    	$params = $this->getRequest()->getParam();
    	print_r($params);
    }
    
    public function createPostAction()
    {
    	$blogpost = Mage::getModel('myfirstmodule/blogpost');
    	$blogpost->setTitle('Code Post22');
        $blogpost->setPost('This post was created from code22');

        $blogpost->save();
        echo "post created";    	
    }
    
    public function updatePostAction()
    {
    	$blogpost = Mage::getModel('myfirstmodule/blogpost');
    	$blogpost->load(1);
    	$blogpost->setTitle("This update title");
    	$blogpost->save();
    	echo 'post edited';
    }
    
    public function deletePostAction()
    {
    	$blogpost = Mage::getModel('myfirstmodule/blogpost');
    	$blogpost->load(1);
    	$blogpost->delete();
    	echo 'post removed';
    }
    
    public function showAllBlogPostsAction()
    {
    	
    $posts = Mage::getModel('myfirstmodule/blogpost')->getCollection();
	foreach($posts as $blog_post){
		echo '<h3>'.$blog_post->getTitle().'</h3>';
		echo nl2br($blog_post->getPost());
}
    }
}

?>