<template>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Paket Emon List</h3>

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
                <th>No</th>
                <th>Nama Paket</th>
                <th>Pagu</th>
                <th>Output</th>
                <th>Satuan Output</th>
                <th>Outcome</th>
                <th>Satuan Outcome</th>
                <th>Kode Pengadaan</th>
                <th>Kode Jenis Paket</th>
                <th>Kode Jenis Kons</th>
                <th>Kode Output</th>
                <th>Modify</th>
              </tr>
              <tr v-for="paket_emon in paket_emondt" :key="paket_emon.id">
                <td scope="row">{{paket_emon.id}}</td>
                <td>{{paket_emon.nmpaket}}</td>
                <td>{{paket_emon.pagurmp}}</td>
                <td>{{paket_emon.trgoutput}}</td>
                <td>{{paket_emon.satoutput}}</td>
                <td>{{paket_emon.trgoutcome}}</td>
                <td>{{paket_emon.satoutcome}}</td>
                <td>{{paket_emon.kdpengadaan}}</td>
                <td>{{paket_emon.kdjnspaket}}</td>
                <td>{{paket_emon.kdjnskon}}</td>
                <td>{{paket_emon.kdoutput}}</td>
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
          <form @submit.prevent="createPaket_emon">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.nmpaket"
                  type="text"
                  name="nmpaket"
                  placeholder="Nama Paket"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('nmpaket') }"
                />
                <has-error :form="form" field="nmpaket"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.pagurmp"
                  type="number"
                  name="pagurmp"
                  placeholder="Pagu"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('pagurmp') }"
                />
                <has-error :form="form" field="pagurmp"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.output"
                  type="number"
                  name="trgoutput"
                  placeholder="Output"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('trgoutput') }"
                />
                <has-error :form="form" field="trgoutput"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.satoutput"
                  type="text"
                  name="satoutput"
                  placeholder="Satuan Output"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('satoutput') }"
                />
                <has-error :form="form" field="satoutput"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.outcome"
                  type="number"
                  name="trgoutcome"
                  placeholder="Outcome"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('trgoutcome') }"
                />
                <has-error :form="form" field="trgoutcome"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.satoutcome"
                  type="text"
                  name="satoutcome"
                  placeholder="Satuan Outcome"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('satoutcome') }"
                />
                <has-error :form="form" field="satoutcome"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.kdpengadaan"
                  type="number"
                  name="kdpengadaan"
                  placeholder="Kode Pengadaan"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('kdpengadaan') }"
                />
                <has-error :form="form" field="kdpengadaan"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.kdjnspaket"
                  type="number"
                  name="kdjnspaket"
                  placeholder="Kode Jenis Paket"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('kdjnspaket') }"
                />
                <has-error :form="form" field="kdjnspaket"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.kdjnskon"
                  type="text"
                  name="kdjnskon"
                  placeholder="Kode Jenis Kon"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('kdjnskon') }"
                />
                <has-error :form="form" field="kdjnskon"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.kdoutput"
                  type="text"
                  name="kdoutput"
                  placeholder="Kode Output"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('kdoutput') }"
                />
                <has-error :form="form" field="kdoutput"></has-error>
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
      paket_emondt: {},
      form: new Form({
        nmpaket: "",
        pagurmp: "",
        output: "",
        satoutput: "",
        outcome: "",
        satoutcome: "",
        kdpengadaan: "",
        kdjnspaket: "",
        kdjnskon: "",
        kdoutput: ""
      })
    };
  },
  methods: {
    loadPaket_emondt() {
      axios
        .get("api/paket_emon")
        .then(({ data }) => (this.paket_emondt = data.data));
    },
    createPaket_emon() {
      this.form.post("api/paket_emon");
    }
  },
  created() {
    this.loadPaket_emondt();
  }
};
</script>
