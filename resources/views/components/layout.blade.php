<!DOCTYPE html>
<html lang="en">
<head>
@include('components.css')
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" data-gr-c-s-loaded="true">


      {{$slot}}

</body>

@include('components.js')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

</html>