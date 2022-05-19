<!-- Modal -->
<div class="modal fade" id="DonateNow" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Donate Now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body donation-form">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label>Select Amount <i class="fa fa-asterisk"></i></label>
                        <ul class="donate-amount-list">
                            <li>
                                <div class="amount-select">
                                    <input type="radio" name="donate_amount" checked id="two">
                                    <label for="two">
                                        $2
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="amount-select">
                                    <input type="radio" name="donate_amount" id="three">
                                    <label for="three">
                                        $3
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="amount-select">
                                    <input type="radio" name="donate_amount" id="five">
                                    <label for="five">
                                        $5
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="amount-select">
                                    <input type="radio" name="donate_amount" id="ten">
                                    <label for="ten">
                                        $10
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="amount-select">
                                    <input type="radio" name="donate_amount" id="other">
                                    <label for="other">
                                        Other
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div id="ifother" style="display: none;">
                                    <input type="number" class="form-control" placeholder="Enter Amount">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <label>Note/Comment</label>
                        <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                    </div>
                </div>
                <hr>
                <div class="step-1">
                    <h5 class="mb-4">Enter Credit Card Details</h5>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <span class="label-heading">First Name <i class="fa fa-asterisk"></i><span>
                                        <input class="form-control" type="text" name="card_holder_firstname" id="card_holder_firstname" value="one" readonly="" required="">
                                    </span></span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <span class="label-heading">Last Name <i class="fa fa-asterisk"></i><span>
                                        <input class="form-control" type="text" name="card_holder_lastname" id="card_holder_lastname" value="vision" readonly="" required="">
                                    </span></span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <span class="label-heading">Email <i class="fa fa-asterisk"></i><span>
                                        <input class="form-control" type="email" name="email" id="email" value="onevision@it.com" readonly="" required="">
                                        <input type="hidden" name="orgUserId" id="orgUserId" value="50749">
                                    </span></span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <span class="label-heading">Card Number <i class="fa fa-asterisk"></i><span>
                                        <input class="form-control" type="text" name="card_number" id="card_number" required="">
                                    </span></span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <span class="label-heading">Expiry Year <i class="fa fa-asterisk"></i></span>
                                <select class="form-control" name="expiration_year" id="expiration_year" required="">
                                    <option value="">Select a year</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                    <option value="2036">2036</option>
                                    <option value="2037">2037</option>
                                    <option value="2038">2038</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <span class="label-heading">Expiry Month <i class="fa fa-asterisk"></i></span>
                                <select class="form-control" name="expiration_month" id="expiration_month" required="">
                                    <option value="">Select a month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <span class="label-heading">CVV <i class="fa fa-asterisk"></i><span>
                                        <input class="form-control" type="text" name="cvv" id="cvv" required="">
                                    </span></span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <span class="label-heading">Zipcode <i class="fa fa-asterisk"></i><span>
                                        <input class="form-control" type="text" name="cc_zip" id="cc_zip" required="">
                                    </span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.amount-select input').click(function() {
                        if ($(this).attr('id') == 'other') {
                            $('#ifother').show();
                        } else {
                            $('#ifother').hide();
                        }
                    });
                });
            </script>
            <div class="modal-footer">
                <label for="anonymously"><input type="checkbox" class="icheck" id="anonymously"> Make me annonymous</label>
                <button type="button" class="btn btn-success">Donate </button>
            </div>
        </div>
    </div>
</div>