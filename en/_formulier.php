 <div class="container">
                <div class="col-md-12 mb-2">
                    <div class="acc-desc">
        
                      <p>Do you also fancy a holiday in the beautiful Lecrin Valley with the Sierra Nevada mountains in the background? Where you go back in time but also a half hour drive from the playas and the city of Granada, fill in the following
                          form.
                      </p>
                    </div>
                    <form action="form-to-email.php" method="post">
                      <div>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" />
                      </div>
                      <div>
                        <label for="surname">Surname:</label>
                        <input type="text" id="surname" name="surname" />
                      </div>
                      <div>
                        <label for="visitor_email">E-mail:</label>
                          <input type="email" id="visitor_email" name="visitor_email" />
                      </div>
                      <div>
                        <label for="question">How many people?</label>
                          <select name="question">
                            <option value="4">4 persons</option>
                            <option value="5">5 persons</option>
                            <option value="6"selected="selected">6 persons</option>
                            <option value="7">7 persons</option>
                            <option value="8">8 persons</option>
                            <option value="9">9 persons</option>
                            <option value="10">10 persons</option>
                          </select>
                      </div>
                      <div>
                        <label for="message">Bericht:</label>
                          <textarea id="message" name="message" placeholder="I would like to rent La Casa en el Valle in the period from date to date."></textarea>
                      </div>

                      <div class="button">
                        <button type="submit"> Send request </button>
                      </div>
                    </form>
                </div>
             </div>