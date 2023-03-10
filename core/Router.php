<?php 
namespace Core ;

class Router{

    //prop
    public Request $request ;
    public Response $response ;
    protected array $routes = [] ;



    //Methods
    public function __construct(Request $request , Response $response)
    {
        $this->request = $request ;
        $this->response = $response ;
    }


    public function get($path , $callback)
    {
        $this->routes['get'][$path] = $callback ;
    }

    public function post($path , $callback)
    {
        $this->routes['post'][$path] = $callback ;
    }


    public function resolve() 
    {
      $path = $this->request->getpath() ;
      $method = $this->request->getMethod() ;
      $callback = $this->routes[$method][$path] ?? false;
      if($callback === false){
        $this->response->setStatusCode(404) ;
        return "not found" ;
      }
      if(is_string($callback)){
        return $this->renderView(); 
      }
      return call_user_func($callback) ;
    }


    public function renderVeiw($view)
    {
      $layoutContent = $this->layoutContent();
      $viewContent = $this->renderOnlyView($view);
      return str_replace('{{content}}', $viewContent, $layoutContent);
      include_once Application::$ROOT_DIR ."../views/$view.php" ;
    }


    protected function layoutContent()
    {
      ob_start() ;
      include_once Application::$ROOT_DIR ."../views/layouts/main.php" ;
      return ob_get_clean() ;
    }


    protected function renderOnlyView($view)
    {
      ob_start() ;
      include_once Application::$ROOT_DIR ."../views/layouts/main.php" ;
      return ob_get_clean() ;
    }
}