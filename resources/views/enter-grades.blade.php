<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>enter-grades</title>
    </head>
<body>
    <div class="container-sm">
        <h1>STUDENTS GRADES</h1>
        <form action = "/compute-grades" method = "POST">
        <input type="hidden" name="student_1" value="{{ $student_1 }}">
        <input type="hidden" name="student_2" value="{{ $student_2 }}">
        <input type="hidden" name="student_3" value="{{ $student_3 }}">
        <input type="hidden" name="student_4" value="{{ $student_4 }}">
        <input type="hidden" name="student_5" value="{{ $student_5 }}">
        @csrf
        <div class="row">
            <!--STUDENT 1-->
            <label>Student: <strong>{{ $student_1 }}</strong></label>
            <div class="col col-md-4">
                <label> Midterm Grade: </label>
                <input type="number" name="s1_midterm" class="form-control">
            </div>
            <div class="col col-md-4">
                <label> Final Grade: </label>
                <input type="number" name="s1_final" class="form-control">
            </div>
            <!--STUDENT 2-->
            <label>Student: <strong>{{ $student_2 }}</strong></label>
            <div class="col col-md-4">
                <label> Midterm Grade: </label>
                <input type="number" name="s2_midterm" class="form-control">
            </div>
            <div class="col col-md-4">
                <label> Final Grade: </label>
                <input type="number" name="s2_final" class="form-control">
            </div>
            <!--STUDENT 3-->
            <label>Student: <strong>{{ $student_3 }}</strong></label>
            <div class="col col-md-4">
                <label> Midterm Grade: </label>
                <input type="number" name="s3_midterm" class="form-control">
            </div>
            <div class="col col-md-4">
                <label> Final Grade: </label>
                <input type="number" name="s3_final" class="form-control">
            </div>
            <!--STUDENT 4-->
            <label>Student: <strong>{{ $student_4 }}</strong></label>
            <div class="col col-md-4">
                <label> Midterm Grade: </label>
                <input type="number" name="s4_midterm" class="form-control">
            </div>
            <div class="col col-md-4">
                <label> Final Grade: </label>
                <input type="number" name="s4_final" class="form-control">
            </div>
            <!--STUDENT 5-->
            <label>Student: <strong>{{ $student_5 }}</strong></label>
            <div class="col col-md-4">
                <label> Midterm Grade: </label>
                <input type="number" name="s5_midterm" class="form-control">
            </div>
            <div class="col col-md-4">
                <label> Final Grade: </label>
                <input type="number" name="s5_final" class="form-control">
            </div>
            <hr>
            <div class="row">
                <button class="btn btn-primary btn-lg"> COMPUTE GRADES</button>
            </div>
        </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
