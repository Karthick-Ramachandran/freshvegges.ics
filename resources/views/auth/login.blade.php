<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
            * {
                box-sizing: border-box;
                }
                
                *:focus {
                    outline: none;
                }
                body {
                font-family: Arial;
                background-color: #3498DB;
                padding: 50px;
                }
                .login {
                margin: 20px auto;
                width: 300px;
                }
                .login-screen {
                background-color: #FFF;
                padding: 20px;
                border-radius: 5px
                }
                
                .app-title {
                text-align: center;
                color: #777;
                }
                
                .login-form {
                text-align: center;
                }
                .control-group {
                margin-bottom: 10px;
                }
                
                input {
                text-align: center;
                background-color: #ECF0F1;
                border: 2px solid transparent;
                border-radius: 3px;
                font-size: 16px;
                font-weight: 200;
                padding: 10px 0;
                width: 250px;
                transition: border .5s;
                }
                
                input:focus {
                border: 2px solid #3498DB;
                box-shadow: none;
                }
                
                .btn {
                  border: 2px solid transparent;
                  background: #3498DB;
                  color: #ffffff;
                  font-size: 16px;
                  line-height: 25px;
                  padding: 10px 0;
                  text-decoration: none;
                  text-shadow: none;
                  border-radius: 3px;
                  box-shadow: none;
                  transition: 0.25s;
                  display: block;
                  width: 250px;
                  margin: 0 auto;
                }
                
                .btn:hover {
                  background-color: #2980B9;
                }
                
                .login-link {
                  font-size: 12px;
                  color: #444;
                  display: block;
                    margin-top: 12px;
                }* {
                    box-sizing: border-box;
                    }
                    
                    *:focus {
                        outline: none;
                    }
                    body {
                    font-family: Arial;
                    background-color: #3498DB;
                    padding: 50px;
                    }
                    .login {
                    margin: 20px auto;
                    width: 300px;
                    }
                    .login-screen {
                    background-color: #FFF;
                    padding: 20px;
                    border-radius: 5px
                    }
                    
                    .app-title {
                    text-align: center;
                    color: #777;
                    }
                    
                    .login-form {
                    text-align: center;
                    }
                    .control-group {
                    margin-bottom: 10px;
                    }
                    
                    input {
                    text-align: center;
                    background-color: #ECF0F1;
                    border: 2px solid transparent;
                    border-radius: 3px;
                    font-size: 16px;
                    font-weight: 200;
                    padding: 10px 0;
                    width: 250px;
                    transition: border .5s;
                    }
                    
                    input:focus {
                    border: 2px solid #3498DB;
                    box-shadow: none;
                    }
                    
                    .btn {
                      border: 2px solid transparent;
                      background: #3498DB;
                      color: #ffffff;
                      font-size: 16px;
                      line-height: 25px;
                      padding: 10px 0;
                      text-decoration: none;
                      text-shadow: none;
                      border-radius: 3px;
                      box-shadow: none;
                      transition: 0.25s;
                      display: block;
                      width: 250px;
                      margin: 0 auto;
                    }
                    
                    .btn:hover {
                      background-color: #2980B9;
                    }
                    
                    .login-link {
                      font-size: 12px;
                      color: #444;
                      display: block;
                        margin-top: 12px;
                    }
    </style>
    <title>Document</title>
</head>
<body>

        <body>
               @if(Session::has('error'))
                <p style="color:white;text-align:center">{{ Session::get('error') }}</p>
                @endif
                @if ( count( $errors ) > 0 )
                @foreach ($errors->all() as $error)
                <div style="padding: 5px; text-align:center; color:white">{{ $error}} </div>
            @endforeach
                
            @endif
                <div class="login">
                    <div class="login-screen">
                        <div class="app-title">
                            <h1>Login</h1>
                        </div>
            <form method="POST" action="{{ route('login') }}">
                          {{ csrf_field() }}
                           <div class="login-form">
                            <div class="control-group">
                            <input type="text" class="login-field" name="email" placeholder="Email" id="login-name">
                            <label class="login-field-icon fui-user" for="login-name"></label>
                            </div>
            
                            <div class="control-group">
                            <input type="password" class="login-field" name="password" placeholder="password" id="login-pass">
                            <label class="login-field-icon fui-lock" for="login-pass"></label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-large btn-block" href="#">login</button>
                        </div>
            </form>
                    </div>
                </div>
            </body>
    
</body>
</html>
