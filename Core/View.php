<?PHP

namespace Core;

class View{

    public static function render($view,$args = []){
        $file = "../App/Views/$view";

        //extract($args,EXTR_SKIP);
        $pizzas = $args;
        if(is_readable($file)){
            require $file;
        }
        else{
            echo "$file not found";
            }
    }
}