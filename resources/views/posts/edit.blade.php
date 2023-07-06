<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
   
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   
    </head>
   
    <body class='antialiased'>
        <h1 class="title">編集画面</h1>
        <form action="/post/{{$post->id}}" method="POST">
          @csrf
          @method('PUT')
          <div class="content__title">
              <h2>Title</h2>
              <input type="text" name="post[title]" placeholder="タイトル"  value="{{$post->title }}"/>
              <p class="title__error" style="color:red">{{$errors->first('post.title')}}</p>
          </div>
              <div class="content__body">
                  <h2>Body</h2>
                   <textarea name="post[body]"  placeholder="今日も1日お疲れさまでした"> {{ $post->body }}</textarea>
                   <p class="body__error" style="color:red">{{$errors->first('post.body')}}</p>
              </div>
               <input type="submit" value="update"/>
         </form>
      <div class="footer">
          <a href="/posts/{{$post->id}}">戻る</a>
      </div>
    </body>
</html>
