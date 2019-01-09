@extends('layouts.app')

@section('content')
<div id="content" class="ui-content ui-content-aside-overlay">
    <div class="ui-content-body">
        <div class="ui-container">
          <div class="admin_body">
            <section class="form_body">
            <div class="container">
              <div class="row">
                <div class="form_content">
                    <h2>Profile</h2>
                      <div class="row">
                          <div class="col-sm-12">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                              <div class="form_block">
                                  <input type="text" autocomplete="off" placeholder="*User Name" name="name" required/>
                              </div>
                              <div class="form_block">
                                  <input type="email" autocomplete="off" placeholder="*Email" name="email" required/>
                              </div>
                              <div class="form_block">
                                  <input type="text" autocomplete="off" placeholder="Country" name="country" required/>
                              </div>

                              <div class="form_block">
                                  <input type="text" autocomplete="off" placeholder="City" name="city" required/>
                              </div>

                              <div class="form_block">
                                  <input type="text" autocomplete="off" placeholder="Phone Number" name="phone" required/>
                              </div>

                              <div class="form_block">
                                  <input type="password" autocomplete="off" placeholder="Password" name="password" required/>
                              </div>

                              <div class="form_block">
                                  <input type="password" autocomplete="off" placeholder="Retype Password" name="password_confirmation" required/>
                              </div>

                              <div class="submit_btn" style="float:right; margin-right:20px">
                                  <input type="submit" class="btn btn-primary" value="Save" />
                              </div>
                            </form>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              </section>
            </div>
          </div>
        </div>
    </div>
    @endsection
