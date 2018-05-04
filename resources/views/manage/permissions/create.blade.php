@extends('layouts.manage')

@section('content')
<div class="main">
    <div class="columns m-t-40">
      <div class="column">
          <h2 class="title"><i class="fa fa-user-plus"> Create New Permission</i></h2>
      </div>
    </div>
    <hr>
    <form action="{{ route('permissions.store') }} " method="POST">
        {{ csrf_field() }}

        <div class="block">
           <b-radio-group class=" m-t-10">
             <b-radio name="permission_type" native-value="basic" v-model="permissionType">Basic</b-radio>
             <b-radio name="permission_type" native-value="crud" v-model="permissionType">CRUD</b-radio>
           </b-radio-group>
          </div>

        <!-- if permissionType = basic -->  
          
          <div class="field" v-if="permissionType === 'basic'">
            <label for="display_name" class="label">Name (Display Name)</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="text" name="display_name" id="display_name" required>
              <span class="icon is-small is-left">
                <i class="fa fa-edit"></i>
              </span>
            </div>
          </div>

          <div class="field" v-if="permissionType === 'basic'">
              <label for="name" class="label">Slug</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" name="name" id="name" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-edit"></i>
                </span>
              </div>
            </div>

            <div class="field" v-if="permissionType === 'basic'">
                <label for="description" class="label">Description</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="text" name="description" id="description" required>
                  <span class="icon is-small is-left">
                    <i class="fa fa-edit"></i>
                  </span>
                </div>
              </div>

          <!-- end of permissionType = basic -->   
          
          <!-- if permissionTyper = crud -->
          
          <div class="field " v-else="permissionType === 'crud'" >
              <label for="resource" class="label m-t-10">Resource</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" name="resource" id="resource" placeholder="Resource Name" >
                <span class="icon is-small is-left">
                    <i class="fa fa-edit"></i>
                  </span>
              </div>

            <div class="column is-one-quarter">
              <div class="section">
                <div class="block">
                    <div class="field">
                        <b-checkbox v-model="crudSelected">Create</b-checkbox>
                    </div>
                    <div class="field">
                        <b-checkbox v-model="crudSelected">Read</b-checkbox>
                    </div>
                    <div class="field">
                        <b-checkbox v-model="crudSelected">Update</b-checkbox>
                    </div>
                    <div class="field">
                        <b-checkbox v-model="crudSelected">Delete</b-checkbox>
                    </div>
                  </div>
                </div>
            </div>
          </div>

            <!-- end of .column --> 

          <input type="hidden" name="crud_selected" :value="crudSelected">

          <div class="field is-grouped">
            <div class="control  m-t-15">
              <button class="button is-primary">Submit</button>
            </div>
            <div class="control m-t-15">
              <button class="button is-outlined">Cancel</button>
            </div>
          </div>
    </form>
  </div> <!-- end of main -->

  @endsection
  
  @section('scripts')
  
  <script>
  
  // var app = new Vue({
  //   el: '#app',
  //   data:{
  //     permission_type:'basic',
  //     resource: '',
  //     crud_selected:['create','read','update','delete']
  //   },
  //   methods:{
  //     crudName: function(item) {
  //       return item.substr(0,1).toUpperCase() + item.substr(1) + "" + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
  //     },
  //     crudSlug: function(item) {
  //       return item.toLowerCase() + "-" + app.resource.toLowerCase();
  //     },
  //     crudDescription: function(item) {
  //       return "Allow a User to" + item.toUpperCase() + "a/an" + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
  //     }
  //   }
  // });
  </script>
  
  @endsection