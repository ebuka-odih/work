
<!DOCTYPE html>
<html lang="en">

@include('front.includes.head')

<body id="register_bg">

<nav id="menu" class="fake_menu"></nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <nav id="menu" class="fake_menu"></nav>


                    <aside>
                        <figure>
                            <a href="index.html"><img src="{{ asset('img/logo_sticky.svg') }}" width="140" height="35" alt="" class="logo_sticky"></a>
                        </figure>
                        <h4 class="text text-center">General Public Form</h4>
                        <hr>
                        <div>
                            {{--                                <div class="access_social">--}}
                            {{--                                    <a href="#0" class="social_bt facebook">Register with Facebook</a>--}}
                            {{--                                    <a href="#0" class="social_bt google">Register with Google</a>--}}
                            {{--                                </div>--}}
                            <form autocomplete="off">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Profession</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone No</label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="email">Profession</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="phone">Organization</label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="phone">Position</label>
                                        <input type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="date_of_birth">Date Of Birth </label>
                                        <input name="date_of_birth" type="date" class="form-control" id="inputPassword4">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address">Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="marital_status">Marital Status</label>
                                        <input name="marital_status" type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="address">Nationality</label>
                                        <input name="nationality" type="text" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="date_of_birth">Religion </label>
                                        <input name="religion" type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="address">State Of Origin</label>
                                        <select name="state"  id="state" class="form-control">

                                            <option value="" selected="selected" > Select State</option>
                                            <option value='Abia'>Abia</option>
                                            <option value='Adamawa'>Adamawa</option>
                                            <option value='AkwaIbom'>AkwaIbom</option>
                                            <option value='Anambra'>Anambra</option>
                                            <option value='Bauchi'>Bauchi</option>
                                            <option value='Bayelsa'>Bayelsa</option>
                                            <option value='Benue'>Benue</option>
                                            <option value='Borno'>Borno</option>
                                            <option value='Cross River'>Cross River</option>
                                            <option value='Delta'>Delta</option>
                                            <option value='Ebonyi'>Ebonyi</option>
                                            <option value='Edo'>Edo</option>
                                            <option value='Ekiti'>Ekiti</option>
                                            <option value='Enugu'>Enugu</option>
                                            <option value='FCT'>FCT</option>
                                            <option value='Gombe'>Gombe</option>
                                            <option value='Imo'>Imo</option>
                                            <option value='Jigawa'>Jigawa</option>
                                            <option value='Kaduna'>Kaduna</option>
                                            <option value='Kano'>Kano</option>
                                            <option value='Katsina'>Katsina</option>
                                            <option value='Kebbi'>Kebbi</option>
                                            <option value='Kogi'>Kogi</option>
                                            <option value='Kwara'>Kwara</option>
                                            <option value='Lagos'>Lagos</option>
                                            <option value='Nasarawa'>Nasarawa</option>
                                            <option value='Niger'>Niger</option>
                                            <option value='Ogun'>Ogun</option>
                                            <option value='Ondo'>Ondo</option>
                                            <option value='Osun'>Osun</option>
                                            <option value='Oyo'>Oyo</option>
                                            <option value='Plateau'>Plateau</option>
                                            <option value='Rivers'>Rivers</option>
                                            <option value='Sokoto'>Sokoto</option>
                                            <option value='Taraba'>Taraba</option>
                                            <option value='Yobe'>Yobe</option>
                                            <option value='Zamfara'>Zamafara</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="date_of_birth">Home Town </label>
                                        <input name="geopolitican_zone" type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="date_of_birth">LGA </label>
                                        <input name="lga" type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="date_of_birth">Fee Reg</label>
                                        <input name="account_no" type="text" class="form-control" id="inputPassword4">
                                    </div>
                                </div>

                                <div id="pass-info" class="clearfix"></div>
                                <a href="#0" class="btn_1 rounded col-5 offset-4">Register Now!</a><hr>
                                <h4 class="text text-center">Sign Up For Other Role</h4>
                                {{--                                    <div class="divider"><span>Or</span></div>--}}
                                <div class="text-center add_top_10">Uploader? <strong><a href="login.html">Sign Up</a></strong></div>
                                <div class="divider"><span>Or</span></div>
                                <div class="text-center add_top_10">Reviewer? <strong><a href="login.html">Sign Up</a></strong></div>
                            </form>
                        </div>
                    </aside>

                    <!-- /login -->
                </div>
            </div>
        </div>
    </div>
</div>

@include('front.includes.script')

<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('js/pw_strenght.js') }}"></script>

</body>
</html>
