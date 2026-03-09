<div id="pharmacy" class=" tab-pane fade">
                            <br>
                            @if ($user->user_pharmcay)
                            <div class="preferred-pharmacy-box">
                                <blockquote class="blockquote">
                                    <p class="lead text-left">
                                        Preferred Pharmacy
                                    </p>
                                    <address class="fs-16">
                                        <strong>{{ $user->user_pharmcay->name }}</strong><br>
                                        {{ $user->user_pharmcay->address }}.<br>
                                        {{ $user->user_pharmcay->city }}, {{ $pharmacy_state->abbreviation ?? '' }}
                                        {{ $user->user_pharmcay->zipCode }}<br>
                                        <abbr title="Phone">P:</abbr> {{ $user->user_pharmcay->phone }}
                                    </address>
                                </blockquote>
                            </div>
                            @endif
                            <div class="map-address-main-box">
                                <hr>
                                <div class="innner-map-address-main-box">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form class="forms-sample" method="post" id="search-pharmacy">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="exampleInputUsername1">Name</label>
                                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                                        placeholder="Name" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputAddress">Address</label>
                                                    <input type="text" class="form-control" id="exampleInputAddress"
                                                        placeholder="Address" name="address"
                                                        value="{{ $user->address }}">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" placeholder="City"
                                                                name="city" value="{{ $user->city }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">State</label>
                                                            <select class="form-control theme-select" name="stateid">
                                                                <option value="">Please select state</option>
                                                                @foreach ($states as $state)
                                                                <option value="{{ $state->id }}"
                                                                    {{ ($state->id == $user->stateid) ? 'selected' : '' }}>
                                                                    {{ $state->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputUsername1">Zip Code</label>
                                                    <input type="number" class="form-control" id="exampleInputUsername1"
                                                        placeholder="Zip Code" name="zipCode"
                                                        value="{{ $user->zipCode }}">
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <button
                                                            class="btn btn-primary  loader-btn-box search-pharmacy-btn"
                                                            type="submit">
                                                            <i class="fa fa-spinner fa-spin btn-loading"
                                                                style="display:none"></i> Search
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class=" e-prescriptions-box mt-2">
                                                    <p class="mb-0 ">The map only shows pharmacies that accept
                                                        e-prescriptions.</p>
                                                    <!--    <a class="theme-color" data-toggle="modal" data-target="#popupModal"><i
                                                        class="fas fa-external-link-alt"></i> Click here to use
                                                    a pharmacy that does not accept e-prescriptions. </a> -->
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="responsive-map">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.0628908401054!2d76.85824131552589!3d30.660357496167308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f95081cd506f7%3A0x8b83dff814c0f93b!2sTEQ%20DEFT!5e0!3m2!1sen!2sin!4v1625203297924!5m2!1sen!2sin"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="branch-pharmacy-box mt-4" id="showPharmacies">

                                    </div>
                                </div>
                            </div>
                        </div>