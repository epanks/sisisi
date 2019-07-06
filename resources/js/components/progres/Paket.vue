<template>
  <div class="row mt-5">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Paketdt List</h3>

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
                <th>ID Progres</th>
                <th>ID Tayang</th>
                <th>ID Kontrak</th>
                <th>Tahun Anggaran</th>
                <th>Kode Satker</th>
                <th>ID Note</th>
                <th>ID Masalah</th>
                <th>Modify</th>
              </tr>
              <tr v-for="paket in paketdt" :key="paket.id">
                <td scope="row">{{paket.id}}</td>
                <td>{{paket.nmpaket}}</td>
                <td>{{paket.pagurmp | numeral('0,0')}}</td>
                <td>{{paket.output| numeral('0,0.00')}}</td>
                <td>{{paket.satoutput}}</td>
                <td>{{paket.outcome| numeral('0,0.00')}}</td>
                <td>{{paket.satoutcome}}</td>
                <td>{{paket.kdpengadaan}}</td>
                <td>{{paket.kdjnspaket}}</td>
                <td>{{paket.kdjnskon}}</td>
                <td>{{paket.kdoutput}}</td>
                <td>{{paket.id_progres}}</td>
                <td>{{paket.id_tayang}}</td>
                <td>{{paket.id_kontrak}}</td>
                <td>{{paket.thnanggaran}}</td>
                <td>{{paket.kdsatker}}</td>
                <td>{{paket.id_note}}</td>
                <td>{{paket.id_masalah}}</td>
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
          <form @submit.prevent="createPaket">
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
                  name="output"
                  placeholder="Output"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('output') }"
                />
                <has-error :form="form" field="output"></has-error>
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
                  name="outcome"
                  placeholder="Outcome"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('outcome') }"
                />
                <has-error :form="form" field="outcome"></has-error>
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
                  type="text"
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
                  type="text"
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
              <div class="form-group">
                <input
                  v-model="form.thnanggaran"
                  type="number"
                  name="thnanggaran"
                  placeholder="Tahun Anggaran"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('thnanggaran') }"
                />
                <has-error :form="form" field="thnanggaran"></has-error>
              </div>
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
                  v-model="form.id_note"
                  type="number"
                  name="id_note"
                  placeholder="Note"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('id_note') }"
                />
                <has-error :form="form" field="id_note"></has-error>
              </div>
              <div class="form-group">
                <input
                  v-model="form.id_masalah"
                  type="number"
                  name="id_masalah"
                  placeholder="Note"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('id_masalah') }"
                />
                <has-error :form="form" field="id_masalah"></has-error>
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
      paketdt: {},
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
        kdoutput: "",
        id_progres: "",
        id_tayang: "",
        id_kontrak: "",
        thnanggaran: "",
        kdsatker: "",
        id_note: "",
        id_masalah: ""
      })
    };
  },
  methods: {
    loadPaketdt() {
      axios.get("api/paket").then(({ data }) => (this.paketdt = data.data));
    },
    createPaket() {
      this.form.post("api/paket");
    }
  },
  created() {
    this.loadPaketdt();
  }
};
</script>
