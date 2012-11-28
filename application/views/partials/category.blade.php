<div class="span4">
    <!--category-->
    <article class="row">
        <div class="span2">
            <img class="pull-left avatar" src="/assets/user-2.png" alt="user">
            <strong>Created by:</strong>
            <p>{{ Str::title($category->user->username) }}</p>
            <span class="label label-success"><small>Administrator</small></span>
            <hr>
            <p>{{date('F d, Y', strtotime($category->created_at))}}</p>
        </div>

        <!--category-->
        <div class="span4">
            <h3>{{$category->category_name}}</h3>
            <p>{{$category->description}}</p>
            {{HTML::link_to_route('category', __('categories.details') . ' &raquo;', $category->id)}}
        </div><!--end category-->
    </article><!--/row-->
</div>