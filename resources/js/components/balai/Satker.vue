<template>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Satkerdt List</h3>

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
                <th>Kode Satker</th>
                <th>Nama Satker</th>
                <th>ID Balai</th>
                <th>Modify</th>
              </tr>
              <tr v-for="satker in satkerdt" :key="satker.id">
                <td>{{satker.id}}</td>
                <td>{{satker.kdsatker}}</td>
                <td>{{satker.nmsatker}}</td>
                <td>{{satker.balai_id}}</td>
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
          <form @submit.prevent="createSatker">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.kdsatker"
                  type="text"
                  name="kdsatker"
                  placeholder="Kode Satker"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('kdsatker') }"
                />
                <has-error :form="form" field="kdsatker"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.nmsatker"
                  type="text"
                  name="nmsatker"
                  placeholder="Nama Satker"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('nmsatker') }"
                />
                <has-error :form="form" field="nmsatker"></has-error>
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
                  <option value>Select Satker Role</option>
                  <option value="admin">Admin</option>
                  <option value="user">Standard Satker</option>
                  <option value="author">Author</option>
                </select>
                <has-error :form="form" field="type"></has-error>
              </div> -->
              <div class="form-group">
                <input
                  v-model="form.balai_id"
                  type="number"
                  name="balai_id"
                  placeholder="ID Balai"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('balai_id') }"
                />
                <has-error :form="form" field="balai_id"></has-error>
              </div>
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
      satkerdt: {},
      form: new Form({
        kdsatker: "",
        nmsatker: "",
        balai_id: ""
      })
    };
  },
  methods: {
    loadSatkerdt() {
      axios.get("api/satker").then(({ data }) => (this.satkerdt = data.data));
    },
    createSatker() {
      this.form.post("api/satker");
    }
  },
  created() {
    this.loadSatkerdt();
  }
};
</script>
