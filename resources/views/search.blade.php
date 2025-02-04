<div class="seach_bg ">
    <div class="flight_menu">
        <ul>
            <li><a onclick="ChangeTripType(2);"><input type="radio" id="inlineRadio1" name="radio" checked="checked"><div class="checkbox-label"></div></a><label for="inlineRadio1">Round Trip</label></li>
            <li><a onclick="ChangeTripType(1);"><input type="radio" id="inlineRadio2" name="radio"><div class="checkbox-label"></div></a><label for="inlineRadio2">One Way</label></li>
        </ul>
    </div>
    <div class="seach_div px-3 pe-lg-0">
        <div class="row">
           
            <div class="col-lg-5  position-relative border-apply">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-6 p-1 position-relative ">
                        <label for="fromCity">Flying From</label><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input id="fromCity" name="fromCity" placeholder="From where?" onfocus="this.select();" type="text" value="" autocomplete="off" onkeypress="return LettersOnly(event)" class="ui-autocomplete-input">
                    </div>
                    <div class="arrow-icon">
                        <span class="excc"><i class="fa-solid fa-arrow-right-arrow-left" id="exchnge" style="color: #194874; "></i></span>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-6 p-1 position-relative ">
                        <label for="toCity">Flying To</label><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input id="toCity" name="toCity" placeholder="To where?" onfocus="this.select();" type="text" value="" autocomplete="off" onkeypress="return LettersOnly(event)" class="ui-autocomplete-input">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 border-aply">
                <div class="row ">
                    <div class="col-6 col-md-6 col-sm-6 p-1 pe-0 border-end-0 border-remover position-relative ">
                        <label for="departure_date">Departure</label><input id="departure_date" name="departure_date" placeholder="17 Jul 24" type="text" value="17 Jul 24" autocomplete="off" onkeydown="return false" readonly="" class="hasDatepicker">
                    </div>

                    <div class="col-6 col-md-6 col-sm-6 p-1 ps-0 border-start-0 border-remover1 position-relative " id="divReturn">
                        <label for="return_date">Return</label><input id="return_date" name="return_date" placeholder="24 Jul 24" type="text" value="24 Jul 24" autocomplete="off" onkeydown="return false" readonly="" class="hasDatepicker">
                    </div>

                    <div class="col-6 col-md-6 col-sm-6 p-1 ps-0 position-relative border-remover1 width-remove2" id="ShowReturn" style="display:none;">
                        <label for="return_date">Return</label><input onclick="ShowReturn();" style="color:#0c44acb3;background: #f1f1f1;cursor:pointer;" id="txtreturn_date" name="txtreturn_date" placeholder="Add Return To Save More" value="Add Return To Save More" autocomplete="off" onkeydown="return false" readonly="">
                    </div>

                </div>
            </div>

            <div class="col-lg-2 p-1 space-between-button ">
                <div class="pass-main position-relative" id="toggle-slow">
                    <label for="txtPaxDetail">Passenger &amp; Class</label><input type="text" id="txtPaxDetail" name="class" placeholder="1 Traveler, Economy" autocomplete="off" class="pax-del" readonly="">
                </div>
                <div class="pass-name" id="box" style="display: none;">
                    <div class="passen_con">
                        <div class="passen_left">
                            <div class="airclass_con">
                                <div class="class_con">
                                    <select id="Cabin" name="Cabin" class="form-control" onchange="setPaxDropBox();">
                                        <option value="1">Economy</option>
                                        <option value="2">PremiumEconomy</option>
                                        <option value="3">Business</option>
                                        <option value="4">First</option>
                                    </select>
                                </div>
                            </div>
                            <span>
                                <label>Adult</label>
                                <div class="adult-right">
                                    <div class="adult-minus qtyminus" onclick="MinusPax('Adult')">
                                        <p class="adult-minus-txt">-</p>
                                    </div>
                                    <input type="text" value="1" class="qtynumber" id="Adult" name="Adult" readonly="readonly">
                                    <div class="adult-plus qtyminus" onclick="PlusPax('Adult')">
                                        <p class="adult-minus-txt">+</p>
                                    </div>
                                </div>
                            </span>
                            <span>
                                <label>Child (2-11)</label>
                                <div class="children-right">
                                    <div class="adult-minus qtyminus" onclick="MinusPax('Child')">
                                        <p class="adult-minus-txt">-</p>
                                    </div>
                                    <input type="text" value="0" class="qtynumber" id="Child" name="Child" readonly="readonly">
                                    <div class="adult-plus qtyminus" onclick="PlusPax('Child')">
                                        <p class="adult-minus-txt">+</p>
                                    </div>
                                </div>
                            </span>
                            <span>
                                <label>Infant (0-2)</label>
                                <div class="infants-right">
                                    <div class="adult-minus qtyminus" onclick="MinusPax('Infant')">
                                        <p class="adult-minus-txt">-</p>
                                    </div>
                                    <input type="text" value="0" class="qtynumber" id="Infant" name="Infant" readonly="readonly">
                                    <div class="adult-plus qtyminus" onclick="PlusPax('Infant')">
                                        <p class="adult-minus-txt">+</p>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>

                    <button onclick="return false;">Done</button>
                </div>
               
            </div>

            <div class="col-lg-2 p-1  text-center">
                <div class="search-button ">
                    <div class="search_con">
                        <button type="submit" onclick="setProgressBar();">Search</button>
                        <input type="hidden" id="hfTripType" name="hfTripType" value="2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>