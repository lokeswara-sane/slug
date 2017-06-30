<html>
    <head>
        <title>@yield('title')</title>
        {{ Html::script('js/angular/angular.js') }}
        {{ Html::style('semantic/dist/semantic.min.css') }}
        {{ Html::script('semantic/dist/jquery-3.1.1.min.js') }}
        {{ Html::script('semantic/dist/semantic.min.js') }}
        {{ Html::script('js/semantic-loaders.js') }}
        {{ Html::script('js/angular-app/app.js') }}
        {{ Html::script('js/angular-app/issueDescription/issueDescriptionController.js') }}
        {{ Html::script('js/angular-app/issueDescription/issueDescription.directive.js') }}         
        {{ Html::script('js/angular-app/issueCreator/issueCreatorController.js') }}
        {{ Html::script('js/angular-app/issueCreator/issueCreator.directive.js') }}  
        {{ Html::script('ckeditor/ckeditor.js') }}
        {{ Html::style('semantic/dist/test.css') }}

        <!--{{ Html::script('ckeditor/styles.js') }}-->
        <!--{{ Html::style('ckeditor/contents.css') }}-->



    </head>

    <!--Need to move to sass later-->
    <style>
        .ui.comments .comment img.avatar,
        .ui.comments .comment .avatar img {
            display: block;
            margin: 0em auto;
            width: 100%;
            height: auto; 
            border-radius: @avatarBorderRadius;
        }
        .scrollbar
        {
            margin-left: 30px;
            float: left;

            background: #F5F5F5;
            overflow-y: scroll;
            margin-bottom: 25px;
        }
        #style-5::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        #style-5::-webkit-scrollbar
        {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-5::-webkit-scrollbar-thumb
        {
            background-color: #0ae;

            background-image: -webkit-gradient(linear, 0 0, 0 100%,
                color-stop(.5, rgba(255, 255, 255, .2)),
                color-stop(.5, transparent), to(transparent));
        }



    </style>
    <body ng-app="slugTracker">
        @yield('content')
    </body>
</html>