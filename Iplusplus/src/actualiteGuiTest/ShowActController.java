/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package actualiteGuiTest;

import java.net.URL;
import java.util.ResourceBundle;
import javaServices.actualiteCRUD;
import javaentity.actualite;
import javafx.fxml.Initializable;
import javafx.fxml.FXML;

import javafx.scene.control.TextField;


public class ShowActController implements Initializable {

     @FXML
    private TextField tftitre;

    @FXML
    private TextField tfdescription;

    @FXML
    private TextField tfetendu;

    @FXML
    private TextField tfimage;

    @FXML
    private TextField tfrating;

    @FXML
    private TextField tfvu;
    /**
     * Initializes the controller class.
     */
 @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }  
    public void settftitre(String message){
    this.tftitre.setText(message);
    }
     public void settfdescription(String message){
    this.tfdescription.setText(message);
    }
      public void settfetendu (String message){
    this.tfetendu.setText(message);
    }
       public void setttfimage(String message){
    this.tfimage.setText(message);
    }
        public void settfrating(String message){
    this.tfrating.setText(message);
    }
          public void settfvu (String message){
    this.tfvu.setText(message);
    }
    
}
