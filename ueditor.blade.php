<div class="form-group {!! !$errors->has($errorKey) ?: 'has-error' !!}">
    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>
    <div class="col-sm-8">
        @include('admin::form.error')
        <script id="{{$id}}" type="text/plain" name="{{$name}}" style="width: 100%;height: 500px;">{!! htmlspecialchars_decode(old($column, $value)) !!}</script>
        @include('admin::form.help-block')
    </div>
</div>
