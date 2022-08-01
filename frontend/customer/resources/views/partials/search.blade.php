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
                            <option value="">-- select gender --</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bedrooms">Min Price</label>
                        <select class="form-control form-select form-control-a" id="bedrooms" name="minPrice">
                            <option value="">-- select price -- </option>
                            <option value="100000">Rp 100.000</option>
                            <option value="500000">Rp 500.000</option>
                            <option value="700000">Rp 700.000</option>
                            <option value="1000000">Rp 1.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bathrooms">Fasilites</label>
                        @foreach ($fasilities as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $item['id'] }}"
                                    name="fasility[]" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $item['fasility'] }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-b">Search Property</button>
                </div>
            </div>
        </form>
    </div>
</div><!-- End Property Search Section -->
