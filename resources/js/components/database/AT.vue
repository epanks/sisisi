<template>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">ATdt List</h3>

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
                <th>Kodefikasi</th>
                <th>Nama CAT</th>
                <th>Nama DAS</th>
                <th>Nama WS</th>
                <th>Provinsi</th>
                <th>Kabupaten/Kota</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Lintang Selatan</th>
                <th>Bujur Timur</th>
                <th>Elevasi Sumur</th>
                <th>Status</th>
                <th>Kriteria</th>
                <th>Modify</th>
              </tr>
              <tr v-for="at in atdt" :key="at.ID">
                <td>{{at.ID}}</td>
                <td>{{at.NamaBalai}}</td>
                <td>{{at.kodefikasi}}</td>
                <td>{{at.nama_cat}}</td>
                <td>{{at.nama_das}}</td>
                <td>{{at.nama_ws}}</td>
                <td>{{at.provinsi}}</td>
                <td>{{at.kota}}</td>
                <td>{{at.kecamatan}}</td>
                <td>{{at.desa}}</td>
                <td>{{at.lintang_selatan}}</td>
                <td>{{at.bujur_timur}}</td>
                <td>{{at.elevasi_sumur}}</td>
                <td>{{at.status}}</td>
                <td>{{at.kriteria}}</td>
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
          <form @submit.prevent="createAt">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.NamaBalai"
                  type="text"
                  name="NamaBalai"
                  placeholder="Nama Balai"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('NamaBalai') }"
                />
                <has-error :form="form" field="NamaBalai"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.kodefikasi"
                  type="text"
                  name="kodefikasi"
                  placeholder="Kodefikasi"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('kodefikasi') }"
                />
                <has-error :form="form" field="kodefikasi"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.nama_cat"
                  type="text"
                  name="nama_cat"
                  placeholder="Nama CAT"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('nama_cat') }"
                />
                <has-error :form="form" field="nama_cat"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.nama_das"
                  type="text"
                  name="nama_das"
                  placeholder="Nama DAS"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('nama_das') }"
                />
                <has-error :form="form" field="nama_das"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.nama_ws"
                  type="text"
                  name="nama_ws"
                  placeholder="Nama WS"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('nama_ws') }"
                />
                <has-error :form="form" field="nama_ws"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.provinsi"
                  type="text"
                  name="provinsi"
                  placeholder="Provinsi"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('provinsi') }"
                />
                <has-error :form="form" field="provinsi"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.kota"
                  type="text"
                  name="kota"
                  placeholder="Kabupaten/Kota"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('kota') }"
                />
                <has-error :form="form" field="kota"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.Kecamatan"
                  type="text"
                  name="Kecamatan"
                  placeholder="Nama Kecamatan"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('Kecamatan') }"
                />
                <has-error :form="form" field="Kecamatan"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.desa"
                  type="text"
                  name="desa"
                  placeholder="Nama Desa"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('desa') }"
                />
                <has-error :form="form" field="desa"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.lintang_selatan"
                  type="text"
                  name="lintang_selatan"
                  placeholder="LS"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('lintang_selatan') }"
                />
                <has-error :form="form" field="lintang_selatan"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.bujur_timur"
                  type="text"
                  name="bujur_timur"
                  placeholder="BT"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('bujur_timur') }"
                />
                <has-error :form="form" field="bujur_timur"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.elevasi_sumur"
                  type="text"
                  name="elevasi_sumur"
                  placeholder="Nama At"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('elevasi_sumur') }"
                />
                <has-error :form="form" field="elevasi_sumur"></has-error>
              </div>
              <div class="form-group">
                <input
                v-model="form.status"
                type="text"
                name="status"Status"
                class="form-control"
                :class="{ 'is-invalid': form.errors.has('status') }"
                />
                <has-error :form="form" field="status"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.kriteria"
                  type="text"
                  name="kriteria"
                  placeholder="Kriteria"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('kriteria') }"
                />
                <has-error :form="form" field="kriteria"></has-error>
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
                  <option value>Select At Role</option>
                  <option value="admin">Admin</option>
                  <option value="user">Standard At</option>
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
      atdt: {},
      form: new Form({
        NamaBalai: "",
        kodefikasi: "",
        nama_cat: "",
        nama_das: "",
        nama_ws: "",
        provinsi: "",
        kota: "",
        kecamatan: "",
        desa: "",
        lintang_selatan: "",
        bujur_timur: "",
        elevasi_sumur: "",
        status: "",
        kriteria: ""
      })
    };
  },
  methods: {
    loadATdt() {
      axios.get("api/at").then(({ data }) => (this.atdt = data.data));
    },
    createAt() {
      this.form.post("api/at");
    }
  },
  created() {
    this.loadATdt();
  }
};
</script>
