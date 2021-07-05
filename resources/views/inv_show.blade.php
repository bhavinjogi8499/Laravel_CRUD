<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 18px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.btn{
	background:#ccc;
	padding:15px 20px;
	 border-radius:8px;
	 color:purple;
	 font-weight:bold;
	 text-decoration:none;
	 
}

.btn_edit{
	background:#ccc;
	padding:15px 20px;
	 border-radius:8px;
	 color:blue;
	 font-weight:bold;
	 text-decoration:none;
	
}

.btn_delete{
	background:#ccc;
	padding:15px 20px;
	 border-radius:8px;
	 color:red;
	 font-weight:bold;
	 text-decoration:none;
	 
}

.msg{
	color:green;
	font-size:20px;
	font-weight:bold
	
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
			<h3>Add new row in table &nbsp;<a href="add" class="btn">Add</a></h3>
			<br/>
			<br/>
			<div class="msg">{{session('msg')}}</div>
			<table id="customers">
						<tr><td>Id</td><td>Name</td><td>Email</td><td>Password</td><td>Phone</td><td>Actions </td>
						</tr>
						@foreach($todoArr as $todo)
						<tr>
							<td>{{$todo->id}}</td>
							<td>{{$todo->name}}</td>
							<td>{{$todo->email}}</td>
							<td>{{$todo->pwd}}</td>
							<td>{{$todo->phone}}</td>
							<td><a href="edit/{{$todo->id}}" class="btn_edit">Edit</a>  <a href="delete/{{$todo->id}}" class="btn_delete">Delete</a></td>
					</tr>
						@endforeach
					</table>
                

            </div>
        </div>
    </body>
</html>
