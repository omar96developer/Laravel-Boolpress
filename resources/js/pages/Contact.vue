<template>
  <div><h1>Contact</h1>
  <div class="container">
     <form @submit.prevent="onSubmit" v-if="!formSubmitted">
        
        <div class="form-group">
            <label class="form-label" for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" v-model="form.nome">
        </div>
         <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" v-model="form.email">
        </div>
         <div class="form-group">
            <label class="form-label" for="messaggio">Messaggio</label>
           <textarea name="messaggio" id="messaggio" cols="30" rows="10" class="form-control" v-model="form.messaggio"></textarea>       
        </div>    
        <button class="btn btn-success" type="submit">Invia</button>
    </form>
    <div class="alert alert-success" v-else>
      Richiesta inviata correttamente.
    </div>
  </div>
     
  </div>
</template>

<script>
export default {
  data() {
    return {
      formSubmitted: false,
      form: {
        nome: "",
        email: "",
        messaggio: "",
      },
    }
  },
  methods: {
    onSubmit() {
      axios.post("/api/contacts", this.form).then((resp) => {
      this.formSubmitted = true;
        
      })
    }
  }

}
</script>

<style>

</style>