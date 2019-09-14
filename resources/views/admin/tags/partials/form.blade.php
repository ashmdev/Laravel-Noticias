<div class="form-group text-dark" action="">
    {{Form::label('name' ,'Nombre de la etiqueta')}}
    {{Form::text('name' , null, ['class'=>'form-control','id'=>'name'])}}
</div>
<div class="form-group text-dark" action="">
    {{Form::label('slug' ,'URL Amigable')}}
    {{Form::text('slug' , null, ['class'=>'form-control','id'=>'slug'])}}
</div>
<div class="form-group text-dark" action="">
    {{Form::submit('Guardar' ,['class'=> 'btn btn-sm btn-primary'])}}
</div>
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#name").keyup(function(){
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
                $("#slug").val(Text);
            });
        })
    </script>
@endsection