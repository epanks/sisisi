<template>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kecamatandt List</h3>

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
                <th>Nama Kecamatan</th>
                <th>ID Kabupaten</th>
                <th>Modify</th>
              </tr>
              <tr v-for="kecamatan in kecamatandt" :key="kecamatan.id">
                <td>{{kecamatan.id}}</td>
                <td>{{kecamatan.name}}</td>
                <td>{{kecamatan.regency_id}}</td>
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
          <form @submit.prevent="createKecamatan">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.id"
                  type="text"
                  name="id"
                  placeholder="ID Kecamatan"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('id') }"
                />
                <has-error :form="form" field="id"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.name"
                  type="text"
                  name="name"
                  placeholder="Nama Kecamatan"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('name') }"
                />
                <has-error :form="form" field="name"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.regency_id"
                  type="text"
                  name="regency_id"
                  placeholder="Kode Kabupaten"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('regency_id') }"
                />
                <has-error :form="form" field="regency_id"></has-error>
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
      kecamatandt: {},
      form: new Form({
        id: "",
        name: "",
        regency_id: ""
      })
    };
  },
  methods: {
    loadKecamatandt() {
      axios
        .get("api/kecamatan")
        .then(({ data }) => (this.kecamatandt = data.data));
    },
    createKecamatan() {
      this.form.post("api/kecamatan");
    }
  },
  created() {
    this.loadKecamatandt();
  }
};
</script>
