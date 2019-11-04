<!DOCTYPE html>
<html lang="en">

<head>
    @partial('head')

    @styles()
    
</head>

<body>
    @partial('header')

    @content()

    @partial('footer')

    @scripts('footer')
</body>

</html>
