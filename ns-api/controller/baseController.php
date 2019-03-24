<?php  
    class baseController
    {
        //Function to load the views
        public static function createView(string $viewName) 
        {
            require_once('views/'.$viewName. 'View.php');
        }

        // //Function to load the menu
        // public function loadMenu(string $active) {
        //     include('views/modules/navVisitor.php');
        // }

        // //Function to load the footer
        // public function loadFooter() {
        //     include('views/modules/footer.php');
        // }

        // //Function to load the css files
        // public function loadHead(string $title, string $pageName) {
        //     include('views/modules/head.php');
        // }
    }