<template>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kabupatendt List</h3>

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
                <th>ID Kabupaten</th>
                <th>Nama Kecamatan</th>
                <th>Modify</th>
              </tr>
              <tr v-for="kabupaten in kabupatendt" :key="kabupaten.id">
                <td>{{kabupaten.id}}</td>
                <td>{{kabupaten.name}}</td>
                <td>{{kabupaten.province_id}}</td>
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
          <form @submit.prevent="createKabupaten">
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
                  v-model="form.province_id"
                  type="text"
                  name="province_id"
                  placeholder="ID Kabupaten"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('province_id') }"
                />
                <has-error :form="form" field="province_id"></has-error>
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
      kabupatendt: {},
      form: new Form({
        id: "",
        name: "",
        province_id: ""
      })
    };
  },
  methods: {
    loadKabupatendt() {
      axios
        .get("api/kabupaten")
        .then(({ data }) => (this.kabupatendt = data.data));
    },
    createKabupaten() {
      this.form.post("api/kabupaten");
    }
  },
  created() {
    this.loadKabupatendt();
  }
};
</script>
