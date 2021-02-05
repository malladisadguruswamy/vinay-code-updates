<?php include('header.php');?>
    <div class="container ">
        <div class="row justify-content-md-center dots_img">
            <div class="col-md-12 ">
                <center>
                    <img src="tataimages/title.png" class="title">
                </center>
            </div>
            <div class="col-md-12 ">
                <h3 class="membership-heading">
                    Choose Membership Category*
                </h3>
                <p class="membership-title">
                    <span>Start by choosing a membership category of your choice and completing the short form</span>
                </p>
            </div>
            <div class="col-md-2">
                <div class="membership-boxes membership_gradi_Life text-center choose-life" onclick="setPayment('Life', '50')" >
                    <h4 class="choose-membership"> Life</h4>
                    <h5 class="choose-membership-prize">
                        <span class="dollar-line">$100 </span> $50
                    </h5>
                    <input type="radio" name="m_plans" id="life" class="m_plans radio-btn" value="50" >  
                    <span class="choose-r-btn">Choose</span>
                </div>
            </div>
            <div class="col-md-2"> 
                <div class="membership-boxes membership_gradi_Sliver text-center choose-silver" onclick="setPayment('Silver', '1250')">  
                    <h4 class="choose-membership">Silver</h4>
                    <h5 class="choose-membership-prize">
                        <span class="dollar-line">$2500 </span> $1250
                    </h5>
                    <input type="radio" name="m_plans" id="silver" class="m_plans radio-btn" value="1250" >
                    <span class="choose-r-btn">Choose</span>
                </div>
            </div>
            <div class="col-md-2"> 
                <div class="membership-boxes membership_gradi_Gold text-center choose-gold" onclick="setPayment('Gold', '2500')">  
                    <h4 class="choose-membership"> Gold</h4>
                    <h5 class="choose-membership-prize"> 
                        <span class="dollar-line">$5000 </span>$2500
                    </h5>
                    <input type="radio" name="m_plans" id="gold" class=" m_plans radio-btn" value="2500">  
                    <span class="choose-r-btn">Choose</span>
                </div>
            </div>
            <div class="col-md-2"> 
                <div class="membership-boxes membership_gradi_Platinum text-center choose-platinum" onclick="setPayment('Platinum', '5000')">  
                    <h4 class="choose-membership"> Platinum</h4>
                    <h5 class="choose-membership-prize"> 
                        <span class="dollar-line">$10,000 </span>$5000
                    </h5>
                    <input type="radio" name="m_plans" id="platinum" class="m_plans radio-btn" value="5000">  
                    <span class="choose-r-btn">Choose</span>
                </div>
            </div>
            <div class="col-md-2 "> 
                <div class="membership-boxes membership_gradi_Daimond text-center choose-diamond " onclick="setPayment('Diamond', '12500')">  
                    <h4 class="choose-membership"> Diamond</h4>
                    <h5 class="choose-membership-prize"> 
                        <span class="dollar-line">$20,000 </span>$12500
                    </h5> 
                    <input type="radio" name="m_plans" id="diamond" class=" m_plans radio-btn" value="12500">  
                    <span class="choose-r-btn">Choose</span>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content ">
        <div class="wizard-v2-content">
            <div class="wizard-image">
                <div class="formone text-center">
                    <div class="user_image_in_member">
                        <i class="fa fa-user" aria-hidden="true"></i> 
                    </div>
                    <h6 class="header-s">Personal Information</h6>
                    <div class="row ro">
                    </div>
                    <p class="membership_message">
                        Become a part of TTA by filling <br>
                        your details here. </p>
                    <!--right-column-->
                    <p class="side-footer-mob">(+1) 809 - 684 - 6333</p>
                    <p class="side-footer-mobs"> info@mytelangana.us</p>
                </div>
            </div>
            <div class="wizard-form">
                <h4 class="member_title  pb-2">Let's Create your account</h4>
                <form class="form-register">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2 >1</h2>
                        <section>
                            <div class="inner">
                                <div class="formtwo"> 
                                    <div class="row rone">
                                        <div class="form-group col-md-6 pb-3">
                                            <label>  First Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your First Name"  name="fname"  id="fname"> 
                                        </div>
                                        <div class="form-group col-md-6  pb-3">
                                            <label >Last Name</label>
                                            <input type="text" class="form-control ml-1" placeholder="Enter your Last Name " name="lname"  id="lname"  > 
                                        </div>
                                        <div class="form-group col-md-12 pb-3">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Enter your Email" name="email" id="email" > 
                                        </div>
                                        <div class="form-group col-md-6 pb-3">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Enter your Phone Number" onkeypress="return blockSpecialChar(event)" name="mobile" id="mobile" maxlength="10"> 
                                        </div>
                                        <div class="form-group col-md-6 pb-3">
                                            <label class="">Password</label>
                                            <input type="password" class="form-control ml-3 pb-2" placeholder="Enter your Password  " style="color:#ABAFB3!important; " name="pwd" id="pwd"> 
                                        </div>
                                        <div class="form-group col-md-6 pb-3">
                                            <label>Street</label>
                                            <input type="text" class="form-control" placeholder="Enter your Street"  name="street" id="street"> 
                                        </div>
                                        <div class="form-group col-md-6 pb-3">
                                            <label class="">City</label>
                                            <input type="text" class="form-control ml-3 box2" placeholder="Enter your City  " style="color:#ABAFB3!important; " id="city" name="city"> 
                                        </div>
                                        <div class="form-group col-md-6 pb-3">
                                            <label class="">State</label>
                                            <input type="text" class="form-control ml-3 box2" placeholder="Enter your State  " style="color:#ABAFB3!important; " id="state" name="state" > 
                                        </div>
                                        <div class="form-group col-md-6 pb-3">
                                            <label class="">Country</label>
                                            <input type="text" class="form-control ml-3 box2" placeholder="Enter your Country " style="color:#ABAFB3!important; " id="country" name="country"> 
                                        </div>
                                    </div>
                                </div>
                          </div>
                        </section>
                        <!-- SECTION 2 -->
                        <h2>2</h2>
                        <section>
                            <div class="inner">
                                <h6 class="member_titles ">Family Details</h6>
                                <div class="formtwo"> 
                                    <div class="row rone">
                                        <div class="form-group col-md-6 fone py-3 pb-3">
                                            <label>Spouse  First Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your First Name" name="sfname" id="sfname" > 
                                        </div>
                                        <div class="form-group col-md-6 ftwo py-3">
                                            <label class="">Spouse Last Name</label>
                                            <input type="text" class="form-control ml-3 box2" placeholder="Enter Your Last Name" name="slname" id="slname"> 
                                        </div>
                                        <div class="list_wrapper"> 
                                            <div class="row child_details">
                                                <div class="col-md-6 child_na">
                                                    <label class="">Child Full Name</label>
                                                    <input name="Child_name[0]" type="text" placeholder="Enter Child Name" class="form-control  "/>
                                                </div>
                                                <div class="col-md-5 ">
                                                    <div class="form-group child_age pp_l">
                                                        <label>Child Age</label>
                                                        <input autocomplete="off" name="Child_age[0]" type="text" class="form-control" placeholder="Enter Child Age"> 
                                                    </div>
                                                </div>
                                                <div class=" col-md-1 list_add_buttons">
                                                    <button class="btn btn-primary list_add_button" type="button"><i class="fa fa-user" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 ftwo py-3">
                                            <h4 class="Subscription_plan">Subscription Plan</h4>
                                            <p class="membership_amount"> Membership Amount</p>
                                            <h4 class="Subscription_plan">Charitable Activities</h4>
                                        </div>
                                        <div class="form-group col-md-4 ftwo py-3">
                                            <h4 class="Subscription_plan">Pricing</h4>
                                            <p class="membership_amount" id="membership_amounts"> $0</p>
                                            <h4 class="Subscription_plan  ">Additional Amount</h4>
                                        </div>
                                        <div class="form-group col-md-6 ftwo py-3 border-bm">
                                            <p class="membership_amounts_total"> Total</p>
                                        </div>
                                        <div class="form-group col-md-2 ftwo py-3">
                                            <p class="membership_amounts" id="membership_amounts"> 
                                                $0</p>
                                            <input type="hidden" name="membership_plan" value="" id="set_plan">
                                            <input type="hidden" name="membership_plan_cost" id="set_amount">
                                        </div>
                                        <div class="form-group col-md-12 ftwo ">
                                            <input type="checkbox" name="mem_accept" id="mem_accept" class="terms_conditions mem_accept" >  <span class="terms_conditions_text" style="color:grey!important;  ">I understand that membership fee is non-refundable.</span>
                                        </div>
                                        <!-- <button class="btn btn-primary submit">submit</button> -->
                                    </div>
                                </div>
                          </div>
                        </section>
                        <!-- SECTION 3 -->
                        <h2>3</h2>
                        <section >
                            <div class="inner" id="target">
                                <div class="row rone">
                                    <div class="form-group col-md-6 pb-3">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your First Name" name="user_fname" id="user_fname"  >
                                    </div>
                                    <div class="form-group col-md-6 pb-3">
                                        <label class="">Last Name</label>
                                        <input type="text" class="form-control ml-3 box2" placeholder="Enter your Last Name " style="color:#ABAFB3!important;" name="user_lname" id="user_lname" >
                                    </div>

                                    <div class="form-group col-md-12 pb-3">
                                        <label>Email</label>
                                        <input type="email" class="form-control" onblur="validateEmail(this);" readonly="readonly" placeholder="Enter your Email" onkeypress="return blockSpecialChar(event)" name="user_email" id="user_email" >
                                    </div>
                                    <div class="form-group col-md-6 pb-3">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Enter your Phone Number" readonly="readonly" name="user_mobile" id="user_mobile" >
                                    </div>
                                    <div class="form-group col-md-6 pb-3">
                                        <label class="">Password</label>
                                        <input type="password" class="form-control ml-3 pb-2" placeholder="Enter your Password " style="color:#ABAFB3!important; " name="user_pwd" id="user_pwd">
                                    </div>

                                    <div class="form-group col-md-6 pb-3">
                                        <label>Street</label>
                                        <input type="text" class="form-control" placeholder="Enter your Street" name="user_street" id="user_street">
                                    </div>
                                    <div class="form-group col-md-6 pb-3">
                                        <label class="">City</label>
                                        <input type="text" class="form-control ml-3 box2" placeholder="Enter your City " style="color:#ABAFB3!important; " id="user_city" name="user_city" >
                                    </div>

                                    <div class="form-group col-md-6 pb-3">
                                        <label class="">State</label>
                                        <input type="text" class="form-control ml-3 box2" placeholder="Enter your State " id="user_state" style="color:#ABAFB3!important; " name="user_state" >
                                    </div>

                                    <div class="form-group col-md-6 pb-3">
                                        <label class="">Country</label>
                                        <input type="text" class="form-control ml-3 box2" placeholder="Enter your Country " id="user_country" style="color:#ABAFB3!important; " name="user_country" >
                                    </div>

                                    <div class="form-group col-md-6 pb-3">
                                        <label class="">Spouse First Name</label>
                                        <input type="text" class="form-control ml-3 box2" placeholder="ENter your Spouse First Name " style="color:#ABAFB3!important; " name="user_sfname" id="user_sfname" >
                                    </div>

                                    <div class="form-group col-md-6 pb-3">
                                        <label class="">Spouse Last Name</label>
                                        <input type="text" class="form-control ml-3 box2" placeholder="Enter your Spouse Last Name " style="color:#ABAFB3!important; " name="user_slname" id="user_slname" >
                                    </div>

                                    <div class="form-group col-md-4 ftwo py-3">
                                        <h4 class="Subscription_plan">Subscription Plan</h4>
                                        <p class="membership_amount">Membership Amount</p>
                                        <h4 class="Subscription_plan">Charitable Activities</h4>
                                    </div>
                                    <div class="form-group col-md-4 ftwo py-3">
                                        <h4 class="Subscription_plan">Pricing</h4>
                                        <p class="membership_amount"><input type="text" class="form-control ml-3 box2" placeholder="Enter Plan " style="color:#ABAFB3!important; " name="user_membership_plan_cost" id="user_membership_plan_cost" ></p>
                                        <h4 class="Subscription_plan">Additional Amount</h4>
                                    </div>
                                    <div class="form-group col-md-6 ftwo py-3 border-bm">
                                        <p class="membership_amounts_total">Total</p>
                                    </div>
                                    <div class="form-group col-md-2 ftwo py-3">
                                        <p class="membership_amounts">$0</p>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="paym"></a><button class="btn btn-md payment_btn submit" type="submit">Save & Proceed to Payment</button>
                                        <span class="btn btn-md payment_btn" onclick="edit_membership()">Edit </span>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- Payment modal -->
    <div id="ordine" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Payment Gateway</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="cp6a35a56143" style="margin: 10px 0" class="rounded-div" onclick="document.getElementById('pay_now_form_f59fe4a644').submit()">
                                    <form action="https://checkout.globalgatewaye4.firstdata.com/pay" id="pay_now_form_f59fe4a644" method="post">
                                        <input type="hidden" name="x_login" value="WSP-TELAN-o5DbNADVzw" />
                                        <input type="hidden" name="x_show_form" value="PAYMENT_FORM" />
                                        <input type="hidden" name="x_fp_sequence" value="16124543372078911578" />
                                        <input type="hidden" name="x_fp_hash" value="PNB-1.0-3e6816cf1a0c8daa9889162dfe03c19d5105d38b" />
                                        <input type="hidden" name="x_amount" id="x_amount" />
                                        <input type="hidden" name="x_currency_code" value="USD" />
                                        <input type="hidden" name="x_test_request" value="FALSE" />
                                        <input type="hidden" name="x_relay_response" value="" />
                                        <input type="hidden" name="donation_prompt" />
                                        <input type="hidden" name="button_code" value="Pay Now Member Registration" />
                                        <div class="cpwrap">
                                            <button  type="button"><img src="tataimages/credit.png"  class="img-fluid debit_card"></button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <?php
                                include 'PaypalExpress.class.php';
                                $paypal = new PaypalExpress;

                                ?>
                                <input type="hidden" id="invironment" value="<?php echo $paypal->paypalEnv; ?>">
                                <input type="hidden" id="sandbox" value="<?php echo $paypal->paypalClientID; ?>">
                                <input type="hidden" id="production" value="<?php echo $paypal->paypalClientID; ?>">
                            <div class="item">
                                <!-- Checkout button -->
                                <div id="paypal-button"></div>
                                <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                            </div>
                            <script>
                                
                            </script>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>
 <script>
    $(document).ready(function () {
        $(".choose-life").click(function () {
            $("#life").prop("checked", true);
        });
        $(".choose-silver").click(function () {
            $("#silver").prop("checked", true);
        });
        $(".choose-gold").click(function () {
            $("#gold").prop("checked", true);
        });
        $(".choose-platinum").click(function () {
            $("#platinum").prop("checked", true);
        });
        $(".choose-diamond").click(function () {
            $("#diamond").prop("checked", true);
        });
    });
    // setPayment function
    function setPayment(plan, amount) {
        $("#set_plan").val(plan);
        $("#set_amount").val(amount);
        $("#membership_amounts").text('$'+amount);
        $("#user_membership_plan_cost").val(amount);
    }
    // Once add button is clicked
    $(document).ready(function ()
    {
        var x = 0; //Initial field counter
        var list_maxField = 10; //Input fields increment limitation
        //Once add button is clicked
        $('.list_add_button').click(function ()
        {
            //Check maximum number of input fields
            if (x < list_maxField) {
                x++; //Increment field counter
                var list_fieldHTML = '<div class="row child_rows"><div class=" col-md-6 py-3><div class="form-group "><input name="Child_name[' + x + ']" type="text" placeholder="Enter Child Name" class="form-control" style="margin-left:17px"/></div><div class="col-md-5 field_mov_left"><div class="form-group "><input name="Child_age[' + x + ']" type="text" placeholder="Enter Child Age" class="form-control age_field"/></div></div><div class="col-md-1 field_mov_lefts"><a href="javascript:void(0);" class="list_remove_button btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></div>'; //New input field html 
                $('.list_wrapper').append(list_fieldHTML); //Add field html
            }
        });
        //Once remove button is clicked
        $('.list_wrapper').on('click', '.list_remove_button', function ()
        {
            $(this).closest('div.row').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    // ajax for form submit
    $(function () {
        $('form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: 'tata_users.php',
                data: $('form').serialize(),
                success: function (result) {
                    var data = JSON.parse(result);
                    if (data['status'] == 'success')
                    {   
                        //swal("Good job!", data['msg'], "success")
                        //setTimeout(function(){swal.close();go_payment_method(data['uid']);},3000);
                        go_payment_method(data['uid']);
                    }
                 //$('#show').load('fetch_membership_formdata.php')
                }
            });
        });
    });
    function go_payment_method(uid){
        var cost = $('#user_membership_plan_cost').val();
        var invironment = $('#invironment').val();
        var sandbox = $('#sandbox').val();
        var production = $('#production').val();
        $('#x_amount').val(cost);
        paypal.Button.render(
            {
                // Configure environment
                env: invironment,
                client: {
                    sandbox: sandbox,
                    production: production,
                },
                // Customize button (optional)
                locale: "en_US",
                style: {
                    size: "small",
                    color: "gold",
                    shape: "pill",
                },
                // Set up a payment
                payment: function (data, actions) {
                    return actions.payment.create({
                        transactions: [
                            {
                                amount: {
                                    total: cost,
                                    currency: "USD",
                                },
                            },
                        ],
                    });
                },
                // Execute the payment
                onAuthorize: function (data, actions) {
                    return actions.payment.execute().then(function () {
                        // Show a confirmation message to the buyer
                        //window.alert('Thank you for your purchase!');

                        // Redirect to the payment process page
                        window.location = "process.php?paymentID=" + data.paymentID + "&token=" + data.paymentToken + "&payerID=" + data.payerID + "&uid=" +uid;
                    });
                },
            },
            "#paypal-button"
        );
        $("#ordine").modal();
    }
    // $(document).ready(function () {
    //     $('#show').load('fetch_membership_formdata.php')
    // });
    </script>