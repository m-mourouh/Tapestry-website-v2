<div class="<?php  if($col_num){echo 'col-md-'.$col_num ;}else{echo 'col-md-6' ;} ?> text-center p-5">
   <h3>Formulaire de contact</h3>
   <p class="mb-5">Pour plus d'informations sur nos prestations n'hésitez pas nous contacter.</p>
   <!-- form contact -->
   <div class="sent-notification"></div>
   <form autocomplete="off" class="form d-block" role="form"  id='contact-form'>
      <div class="row mb-3">
         <div class="col-lg-12">
            <input class="form-control" id="name"  required="" type="text" placeholder="Nom et Prénom">
         </div>
      </div>
      <div class="row mb-3">
         <div class="col-lg-12">
            <input class="form-control" id="email" placeholder="Courriel" required="" type="email">
         </div>
      </div>
      <div class="row mb-3">
         <div class="col-lg-12">
            <input class="form-control" id="tel"  placeholder="Téléphone" required="" type="tel">
         </div>
      </div>
      <div class="row mb-3">
         <div class="col-lg-12">
            <input class="form-control" id="subject"  required="" placeholder='Object' ></inp>
         </div>
      </div>
      <div class="row mb-3">
         <div class="col-lg-12">
            <textarea class="form-control" id="message"  required="" placeholder='Message' rows="6" ></textarea>
         </div>
      </div>
      <button class="btn btn-primary contact-btn p-3" type='button'  onclick="sendEmail()">Envoyer</button>
   </form>
</div>



