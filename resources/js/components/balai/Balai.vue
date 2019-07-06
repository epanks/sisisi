<template>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Balaidt List</h3>

          <div class="card-tools">
            <button class="btn btn-success" data-toggle="modal" data-target="#addNew">
              Add New
              <i class="fas fa-user-plus fa-fw"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <tbody>
              <tr>
                <th>ID</th>
                <th>Nama Balai</th>
                <th>ID Wilayah</th>
                <th>Modify</th>
              </tr>
              <tr v-for="balai in balaidt" :key="balai.id">
                <td>{{balai.id}}</td>
                <td>{{balai.nmbalai}}</td>
                <td>{{balai.id_wilayah}}</td>
                <td>
                  <a href="#">
                    <i class="fa fa-edit blue"></i>
                  </a>
                  /
                  <a href="#">
                    <i class="fa fa-trash red"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addNew"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addNewLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addNewLabel">Add New</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="createBalai">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.nmbalai"
                  type="text"
                  name="nmbalai"
                  placeholder="Nama Balai"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('nmbalai') }"
                />
                <has-error :form="form" field="nmbalai"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.id_wilayah"
                  type="number"
                  name="id_wilayah"
                  placeholder="ID Wilayah"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('id_wilayah') }"
                />
                <has-error :form="form" field="id_wilayah"></has-error>
              </div>

              <!-- <div class="form-group">
                <select
                  v-model="form.type"
                  type="type"
                  name="type"
                  placeholder="type Address"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('type') }"
                >
                  <option value>Select Balai Role</option>
                  <option value="admin">Admin</option>
                  <option value="user">Standard Balai</option>
                  <option value="author">Author</option>
                </select>
                <has-error :form="form" field="type"></has-error>
              </div>-->
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</template>

<script>
export default {
  data() {
    return {
      balaidt: {},
      form: new Form({
        nmbalai: "",
        id_wilayah: ""
      })
    };
  },
  methods: {
    loadBalaidt() {
      axios.get("api/balai").then(({ data }) => (this.balaidt = data.data));
    },
    createBalai() {
      this.form.post("api/balai");
    }
  },
  created() {
    this.loadBalaidt();
  }
};
</script>
