@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Fontawesome rating</h4>
          <p class="card-description">Simple rating with font-awesome icons</p>
          <select id="example-fontawesome" name="rating" autocomplete="off">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">CSS rating</h4>
          <p class="card-description">CSS star rating</p>
          <select id="example-css" name="rating" autocomplete="off">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">1/10 rating</h4>
          <p class="card-description">Rating from 1 to 10</p>
          <div class="br-wrapper br-theme-bars-1to10">
            <select id="example-1to10" name="rating" autocomplete="off" class="d-none">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7" selected="selected">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Movie rating</h4>
          <p class="card-description">Rating reviews</p>
          <div class="br-wrapper br-theme-bars-movie mb-4">
            <select id="example-movie" name="rating" autocomplete="off" class="d-none">
              <option value="Bad">Bad</option>
              <option value="Mediocre">Mediocre</option>
              <option value="Good" selected="selected">Good</option>
              <option value="Awesome">Awesome</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Square rating</h4>
          <p class="card-description">Rating in square options</p>
          <div class="br-wrapper br-theme-bars-square">
            <select id="example-square" name="rating" autocomplete="off" class="d-none">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Pill rating</h4>
          <p class="card-description">Rating options as pills</p>
          <div class="br-wrapper br-theme-bars-pill">
            <select id="example-pill" name="rating" autocomplete="off" class="d-none">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
              <option value="F">F</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Reversed rating</h4>
          <p class="card-description">Rating in reversed order</p>
          <div class="mb-5">
            <select id="example-reversed" name="rating" autocomplete="off">
              <option value="Strongly Agree">Strongly Agree</option>
              <option value="Agree">Agree</option>
              <option value="Disagree">Disagree</option>
              <option value="Strongly Disagree">Strongly Disagree</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Horizontal rating</h4>
          <p class="card-description">Rating as horizontal options</p>
          <div class="br-wrapper br-theme-bars-horizontal">
            <select id="example-horizontal" name="rating" autocomplete="off" class="d-none">
              <option value="10">10</option>
              <option value="9">9</option>
              <option value="8">8</option>
              <option value="7">7</option>
              <option value="6">6</option>
              <option value="5">5</option>
              <option value="4">4</option>
              <option value="3">3</option>
              <option value="2">2</option>
              <option value="1" selected="selected">1</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-7 grid-margin stretch-card">
      <!--x-editable starts-->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">X-editable Editor</h4>
          <p class="card-description">Edit forms inline</p>
          <div class="template-demo">
            <form id="editable-form" class="editable-form">
              <div class="form-group row">
                <label class="col-6 col-lg-4 col-form-label">Simple text field</label>
                <div class="col-6 col-lg-8 d-flex align-items-center">
                  <a href="#" id="username" data-type="text" data-pk="1">awesome</a>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-6 col-lg-4 col-form-label">Empty text field, required</label>
                <div class="col-6 col-lg-8 d-flex align-items-center">
                  <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-6 col-lg-4 col-form-label">Select, local array, custom display</label>
                <div class="col-6 col-lg-8 d-flex align-items-center">
                  <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex">not selected</a>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-6 col-lg-4 col-form-label">Combodate (date)</label>
                <div class="col-6 col-lg-8 d-flex align-items-center">
                  <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth">15/05/1984</a>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-6 col-lg-4 col-form-label">Textarea, buttons below. Submit by ctrl+enter</label>
                <div class="col-6 col-lg-8 d-flex align-items-center">
                  <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--x-editable ends-->
    </div>
    <div class="col-lg-5 grid-margin stretch-card">
      <!--form mask starts-->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form mask</h4>
          <p class="card-description">Gives a preview of input format</p>
          <form class="forms-sample">
            <div class="form-group row">
              <div class="col">
                <label>Date:</label>
                <input class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"/>
              </div>
              <div class="col">
                <label>Date time:</label>
                <input class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy HH:MM:ss" />
              </div>
            </div>
            <div class="form-group">
              <label>Date with custom placeholder:</label>
              <input class="form-control" data-inputmask="'alias': 'datetime'" data-inputmask-placeholder="*" data-inputmask-inputformat="dd/mm/yyyy" />
            </div>
            <div class="form-group">
              <label>Phone:</label>
              <input class="form-control" data-inputmask-alias="(+99) 9999-9999"/>
            </div>
            <div class="form-group">
              <label>Currency:</label>
              <input class="form-control" data-inputmask="'alias': 'currency'" />
            </div>
            <div class="form-group row">
              <div class="col">
                <label>Email:</label>
                <input class="form-control" data-inputmask="'alias': 'email'" />
              </div>
              <div class="col">
                <label>Ip:</label>
                <input class="form-control" data-inputmask="'alias': 'ip'" />
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--form mask ends-->
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title d-flex">Dropify
            <small class="ms-auto align-self-end">
              <a href="dropify.html" class="font-weight-light" target="_blank">More dropify examples</a>
            </small>
          </h4>
          <input type="file" class="dropify" />
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Dropzone</h4>
          <form action="https://www.bootstrapdash.com/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Jquery file upload</h4>
          <div class="file-upload-wrapper">
            <div id="fileuploader">Upload</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row grid-margin">
    <div class="col-12">
      <div class="card">
        <div class="row">
          <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="card-body">
              <h4 class="card-title">Color picker (default)</h4>
              <p class="card-description">Click to select color</p>
              <input type='text' class="color-picker" value="#ffe74c" />
            </div>
          </div>
          <div class="col-lg-4 grid-margin grid-margin-lg-0">
            <div class="card-body">
              <h4 class="card-title">Color picker (complex)</h4>
              <p class="card-description">Advanced options for colorpicker</p>
              <input type='text' class="color-picker" data-mode="complex" value="#6bf178" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card-body">
              <h4 class="card-title">Color picker (gradient)</h4>
              <p class="card-description">Click to select gradient</p>
              <input type='text' class="color-picker" data-mode="gradient" value="#ff5964" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 grid-margin d-flex align-items-stretch">
      <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Datepicker (default)</h4>
              <p class="card-description">Click to open datepicker</p>
              <div id="datepicker-popup" class="input-group date datepicker">
                <input type="text" class="form-control">
                <span class="input-group-addon input-group-append border-left">
                  <span class="ti-calendar input-group-text"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!--tag strats-->
        <div class="col-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Clockpicker (default)</h4>
              <p class="card-description">A simple clockpicker</p>
              <div class="input-group date" id="timepicker-example" data-bs-target-input="nearest">
                <div class="input-group" data-bs-target="#timepicker-example" data-bs-toggle="datetimepicker">
                  <input type="text" class="form-control datetimepicker-input" data-bs-target="#timepicker-example"/>
                  <div class="input-group-addon input-group-append"><i class="ti-time input-group-text"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--tag ends-->
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Inline datepicker</h4>
          <p class="card-description">An inline datepicker</p>
          <div id="inline-datepicker" class="datepicker"></div>
        </div>
      </div>
    </div>
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Date range</h4>
          <p class="card-description">A simple date range picker</p>
          <div class="input-group input-daterange d-flex align-items-center">
            <input type="text" class="form-control" value="2012-04-05">
            <div class="input-group-addon mx-4">to</div>
            <input type="text" class="form-control" value="2012-04-19">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="row">
          <div class="col-lg-6">
            <div class="card-body">
              <h4 class="card-title">Form repeater</h4>
              <p class="card-description">Click the add button to repeat the form</p>
              <form class="form-inline repeater">
                <div data-repeater-list="group-a">
                  <div data-repeater-item class="d-flex mb-2">
                    <label class="sr-only" for="inlineFormInputGroup1">Users</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input type="text" class="form-control form-control-sm" id="inlineFormInputGroup1" placeholder="Add user">
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                    <button data-repeater-delete type="button" class="btn btn-danger btn-sm icon-btn ms-2" >
                      <i class="ti-trash"></i>
                    </button>
                  </div>
                </div>
                <button data-repeater-create type="button" class="btn btn-info btn-sm icon-btn ms-2 mb-2">
                  <i class="ti-plus"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card-body">
              <h4 class="card-title">Input Tag</h4>
              <p class="card-description">Type to add a new tag</p>
              <input name="tags" id="tags" value="London,Canada,Australia,Mexico" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
