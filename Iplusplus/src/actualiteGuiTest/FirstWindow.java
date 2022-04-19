/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package actualiteGuiTest;

import java.io.IOException;
import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

/**
 *
 * @author sahra
 */
public class FirstWindow extends Application {
    
    @Override
    public void start(Stage primaryStage) {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("/actualiteGuiTest/Addact.fxml"));
            Parent root2 = FXMLLoader.load(getClass().getResource("/actualiteGuiTest/UpdateAct.fxml"));
            Parent root3 = FXMLLoader.load(getClass().getResource("/actualiteGuiTest/DeleteAct.fxml"));

            Scene scene = new Scene(root);
            Scene sceneUPDATE= new Scene(root2);
            Scene sceneDelete= new Scene(root3);

            primaryStage.setTitle("Ajouter Actualite!");
            primaryStage.setScene(sceneDelete);
            primaryStage.show();
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }
    
}
