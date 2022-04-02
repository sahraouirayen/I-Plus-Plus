/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.ui.Button;
import com.codename1.ui.Calendar;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import static com.codename1.ui.FontImage.MATERIAL_ARROW_BACK;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.table.TableLayout;
import com.codename1.ui.util.Resources;
import com.codename1.uikit.cleanmodern.services.ServiceEvent;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;
import java.util.Map;

/**
 *
 * @author karim
 */
public class ModifEvent extends Form {

    public ModifEvent(Resources res, Map l) throws ParseException {
        super((String) l.get("nom_event"), new TableLayout(10, 2));

        Toolbar tb1 = new Toolbar(true);
        setToolbar(tb1);
        tb1.setTitle((String) l.get("nom_event"));
        Label space = new Label();
        Label space2 = new Label();
        Label nomEv = new Label("Nom de l'evenement");
        Label lieuEv = new Label("Lieu de l'venement");
        Label descEv = new Label("Description de l'evenement");
        Label typeEv = new Label("Type de l'evenement");
        Label date = new Label("Date de l'evenement");
        Button Modifier = new Button("Modifier");
        Button Supprimer = new Button("Supprimer");

        String nom_event = (String) l.get("nom_event");
        String lieuD = (String) l.get("lieu ");
        String desc_event = (String) l.get("desc_event");
        String type = (String) l.get("type");
        Map datee = (Map) l.get("date");
        String dateev = (String) datee.get("date");
        String newdateev = dateev.substring(0, 10);

        Date lee = new SimpleDateFormat("yyyy-mm-dd").parse(newdateev);

        long milliseconds = lee.getTime();

        Calendar dateEv = new Calendar(milliseconds);
        TextField nom = new TextField(nom_event);
        TextField lieuevent = new TextField(lieuD);
        TextField description = new TextField(desc_event);
        CheckBox solo = new CheckBox("Solo");
        CheckBox duo = new CheckBox("Duo");
        System.out.println("typeeeeee" + type.equals("Solo"));
        if (type.equals("Duo")) {
            duo.setSelected(true);
        }
        if (type.equals("Solo")) {
            solo.setSelected(true);
        }
        float idevent = Float.parseFloat(l.get("id_event").toString());
        int id = (int) idevent;
        Supprimer.addActionListener(e -> {
            ServiceEvent.getInstance().supprimerEvent(String.valueOf(id));

        });
        Modifier.addActionListener(e -> {
            if (solo.isSelected()) {
                ServiceEvent.getInstance().modifEvent(String.valueOf(id), nom.getText(), String.valueOf(new Date(dateEv.getSelectedDay())), lieuevent.getText(), description.getText(), solo.getText());

            }

        });
        add(nomEv);
        add(nom);
        add(lieuEv);
        add(lieuevent);
        add(descEv);
        add(description);
        add(duo);
        add(solo);
        add(date);
        add(dateEv);
        add(Modifier);
        add(Supprimer);
                getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new HomeForm(res).show());

    }
}
