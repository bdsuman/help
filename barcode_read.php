<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    
    $('.js-example-basic-single').select2({ width:"100%"});
});
      window.addEventListener("keypress", function (event) {
         console.log(this.value);
      });
    </script>
</head>
<body>
<select class="js-example-basic-single" name="state">
  <option value="AL">Alabama</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
  <option value="WY">Wyoming</option>
</select>
</body>
</html>