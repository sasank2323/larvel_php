<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin: 5px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .ss{
    
            height: auto;
            width:300px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form action="/adduser2" method="POST">
        @csrf   
    <div class="ss">
    <h3> Select your skills:</h3>
    <input type="checkbox" id="php" name="skill[]" value="PHP">
    <label for="php"> PHP</label><br>
    <input type="checkbox" id="laravel" name="skill[]" value="Laravel">
    <label for="laravel"> Laravel</label><br>
    <input type="checkbox" id="javascript" name="skill[]" value="JavaScript">
    <label for="javascript"> JavaScript</label><br>
    </div>

    <div class="ss">
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male"> Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">   
        <label for="female"> Female</label><br>
    </div>

    <div class="ss">
        <h4> Select your proficiency level:</h4>
      <select name="level" id="level">
        <option value="beginner">Beginner</option>
        <option value="intermediate">Intermediate</option>
        <option value="advanced">Advanced</option>
      </select>
    </div>
    <input type="submit" value="Submit">
    </form>

</body>
</html>