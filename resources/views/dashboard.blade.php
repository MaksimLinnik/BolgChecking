<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Checking</title>
	<!--
    Template 2105 Input
	http://www.tooplate.com/view/2105-input
	-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tooplate.css') }}">
</head>

<body id="survey" class="font-weight-light">
    <div class="container tm-container-max-800">
        <div class="row">
            <div class="container-fluid">
                <div class="bg-cover clearfix pt-3"></div>
                <a class="navbar-brand mr-auto" href="index.html"><img src="img/logo.png" alt="image" Width= 720 Height= 120></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            <div class="col-12">
                <header class="mt-5 mb-5 text-center">
                    <h1 class="font-weight-dark tm-form-title">We are here to assist you!</h1>
                    <p class="tm-form-description">Please complete the form below for your complaints.</p>
                </header>
                <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="tm-bg-black tm-form-block">
                        <p class="mb-4">1. Please fill this institute Complaint form regrding your Complaint</p>
                        <div class="row mb-4">
                            <div class="col-xl-6">
                                <div class="input-field">
                                    <select name="occupation" id="occupation">
                                        <option value="">Your Semester</option>
                                        <option value="1">Ist Semester</option>
                                        <option value="2">IInd Semester</option>
                                        <option value="3">IIIrd Semester</option>
                                        <option value="4">IVth Semester</option>
                                        <option value="5">Vth Semester</option>
                                        <option value="6">VIth Semester</option>
                                        <option value="7">VIIth Semester</option>
                                        <option value="8">VIIIth Semester</option>
                                    </select>
                                    @if ($errors->has('occupation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('occupation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-field">
                                    <select name="sdegree" id="sdegree">
                                        <option value="">Degree</option>
                                        <option value="25">B.Tech</option>
                                        <option value="45">BCA</option>
                                        <option value="65">BBA</option>
                                        <option value="85">B.ARC</option>
                                    </select>
                                    @if ($errors->has('sdegree'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sdegree') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-field">
                                    <select name="classnum" id="classnum">
                                        <option value="">Your Class</option>
                                        <option value="25">A</option>
                                        <option value="45">B</option>
                                        <option value="65">C</option>
                                        <option value="85">d</option>
                                    </select>
                                    @if ($errors->has('classnum'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('classnum') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-field">
                                    <select name="age" id="age">
                                        <option value="">Your Age</option>
                                        <option value="18">18-24</option>
                                        <option value="25">25-34</option>
                                        <option value="35">35-49</option>
                                        <option value="50">50-65</option>
                                    </select>
                                    @if ($errors->has('age'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('age') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input-field">
                                    <input placeholder="Your Name" name="name" id="name" type="text" class="validate" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-field">
                                    <input placeholder="Your Email" name="email" id="email" type="text" class="validate" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-field">
                                    <input placeholder="Your Phone" name="phone" id="number" type="number" class="validate" value="{{ old('phone') }}" required>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label class="mr-4">
                                    <input class="with-gap" name="gender" type="radio" value="m" checked required/>
                                    <span>Male</span>
                                </label>
                                <label>
                                    <input class="with-gap" name="gender" type="radio" value="f" required/>
                                    <span>Female</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <textarea class="p-3" name="message" id="message" cols="30" rows="3" placeholder="Additional Message...(optional)" required>{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="tm-bg-black tm-form-block">
                        <p class="mb-4">2. Complain Regarding .</p>
                        <ul class="ml-3">
                            <li>
                                <label>
                                    <input class="with-gap" name="group1" value="value1" type="radio" required/>
                                    <span>A. Account</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="with-gap" name="group1" value="value2" type="radio" required/>
                                    <span>B. Degree Section</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="with-gap" name="group1" value="value3" type="radio" required/>
                                    <span>C. Examination Branch</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="with-gap" name="group1" value="value4" type="radio" required/>
                                    <span>D. Transport</span>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input class="with-gap" name="group1" value="value4" type="radio" required/>
                                    <span>E. Cafe/Bookshop</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="tm-bg-black tm-form-block">
                        <p class="mb-4">3. Details please explain your complain here.</p>
                        <div class="row">
                            <div class="col-xl-6 mb-4">
                                <textarea class="p-3" name="description" cols="30" rows="4" placeholder="Your description" required>{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-xl-6">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="choice1" class="filled-in" checked="checked"/>
                                            <span>Choice One Complain</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="choice2" class="filled-in" checked="checked"/>
                                            <span>Second Choice Complain</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="choice3" class="filled-in"/>
                                            <span>Third Choice Complain</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tm-bg-black tm-form-block">
                        <p class="mb-4">4. Inqury Regarding Transportation and others.</p>
                        <div class="row">
                            <div class="form-group mb-2 col-xl-6 col-lg-6 col-md-6 col-12 pl-0 tm-form-group-2-col tm-form-group-2-col-l">
                                <label for="expectedsalary" class="black-text mb-4 big">Transport</label>
                                <select name="expectedsalary">
                                    <option value="">Select</option>
                                    <option value="1000">$1,000 - 1,999</option>
                                    <option value="2000">$2,000 - 2,999</option>
                                    <option value="3000">$3,000 - 3,999</option>
                                </select>
                                @if ($errors->has('expectedsalary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('expectedsalary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mb-2 col-xl-6 col-lg-6 col-md-6 col-12 pr-0 tm-form-group-2-col tm-form-group-2-col-r">
                            <label for="file" class="black-text mb-4 big">Attach a file</label>
                            <div class="file-field input-field">
                                <div class="btn btn-white">
                                    <span>Browse...</span>
                                    <input type="file" name="browse" value="{{ old('browse') }}" required>
                                    @if ($errors->has('browse'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('browse') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="CVfile" type="text" value="{{ old('CVfile') }}" placeholder="your-file.pdf">
                                    @if ($errors->has('CVfile'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('CVfile') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <textarea class="p-3" name="totmessage" id="totmessage" cols="30" rows="3" placeholder="Additional Message...(optional)" required>{{ old('totmessage') }}</textarea>
                                @if ($errors->has('totmessage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('totmessage') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="waves-effect btn-large">Submit</button>
                    </div>
                    <div class="text-center mt-5">
                        <button type="clear" class="waves-effect btn-large">Clear form</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12">
                <p class="text-center grey-text text-lighten-2 tm-footer-text-small">
                    Copyright &copy; 2020 Institute University
                    - <a rel="nofollow" href="#">Southern Punjab</a> by 
                    <a rel="nofollow" href="#" class="tm-footer-link">Collage</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>