<!-- ======= Property Search Section ======= -->
<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
        <form class="form-a" action="/search" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label class="pb-2" for="Type">City</label>
                        <input type="text" class="form-control form-control-lg form-control-a" name="city"
                            placeholder="City">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="garages">For gender</label>
                        <select class="form-control form-select form-control-a" name="gender" id="garages">
                            <option>Any</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bedrooms">Min Price</label>
                        <select class="form-control form-select form-control-a" id="bedrooms" name="minPrice">
                            <option value="">Any</option>
                            <option>Rp 100.000</option>
                            <option>Rp 500.000</option>
                            <option>Rp 700.000</option>
                            <option>Rp 1.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bathrooms">Fasilites</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Indoor bathroom
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="2" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Toilet seat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Hot water
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Mattress
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Wardrobe
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                TV
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                AC
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Table
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                WiFi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Chair
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Fan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Window
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Including electricity costs
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Parking area
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Parking area
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Kitchen
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Washing machine
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Security
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Laundry
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Mushola
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Refrigerator
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Dispenser
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="fasility[]"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Family room
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Search Property</button>
                </div>
            </div>
        </form>
    </div>
</div><!-- End Property Search Section -->
