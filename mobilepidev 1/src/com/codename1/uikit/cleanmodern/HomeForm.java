/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.table.TableLayout;
import com.codename1.ui.util.Resources;
import com.codename1.uikit.cleanmodern.utils.SessionManager;
import com.codename1.uikit.cleanmodern.utils.Statics;
import java.io.IOException;
import java.util.List;
import java.util.Map;

/**
 *
 * @author karim
 */
public class HomeForm extends Form {
    Form current;
     
    public HomeForm(Resources res) { 
        super("Admin Space", new TableLayout(10, 3));
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);

        tb.setTitle("Admin Space");
        tb.showToolbar();
        current=this;
    setTitle("Home");
    setLayout(BoxLayout.y());
    
    add (new Label("Choose an option "));
    Button btnAddevent=new Button("Add event");
    Button btnListevent=new Button("List events");

    btnAddevent.addActionListener(e->new AddEventForm(res).show());
    btnListevent.addActionListener(e->new ListeventForm(res).show());
    addAll(btnAddevent,btnListevent);
        tb.addSearchCommand(e -> {
        });
        tb.addMaterialCommandToSideMenu("Utilisateurs", FontImage.MATERIAL_ACCOUNT_BOX, e -> new AdminForm(res).show());
        tb.addMaterialCommandToSideMenu("Evenements", FontImage.MATERIAL_EVENT, e -> new HomeForm(res).show());
         tb.addMaterialCommandToSideMenu("Actualite", FontImage.MATERIAL_EVENT, e -> {
            try {
                new ListActualiteBackForm(res).show();
            } catch (IOException ex) {
            }
        });
        tb.addMaterialCommandToSideMenu("Produits", FontImage.MATERIAL_SETTINGS, e -> new prodlist(res).show());
        tb.addMaterialCommandToSideMenu("Promo", FontImage.MATERIAL_SETTINGS, e -> new listpromo(res).show());
        tb.addMaterialCommandToSideMenu("Logout", FontImage.MATERIAL_EXIT_TO_APP, e -> {
            new SignInForm(res).show();
            SessionManager.pref.clearAll();

        });

    
}
}
