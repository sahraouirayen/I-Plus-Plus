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
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.codename1.uikit.cleanmodern.services.ServiceEvent;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;

/**
 *
 * @author karim
 */
public class AddEventForm extends Form {

    public AddEventForm(Resources res) {
        super("Add new Event", BoxLayout.y());

        Toolbar tb = new Toolbar(true);
        /* setToolbar(tb);
            getTitleArea().setUIID("Container");
            setTitle("Profile");
            getContentPane().setScrollVisible(false);
            
            tb.addSearchCommand(e -> {
            });
        
         */
        setToolbar(tb);

        tb.setTitle("Admin Space");
        tb.showToolbar();
        setTitle("List event");
        TextField nomEvent = new TextField("", "Nom de l'evenement");
        Picker datepicker = new Picker();
        datepicker.setType(Display.PICKER_TYPE_DATE);

        Calendar ca = new Calendar();

        TextField lieuEvent = new TextField("", "lieu de l'evenement");
        TextField descEvent = new TextField("", "description de l'evenement");
        CheckBox solo = new CheckBox("Solo");
        CheckBox duo = new CheckBox("Duo");

        Button btnAddevent = new Button("Add new event");

        add(nomEvent);
        add(datepicker);
        add(lieuEvent);
        add(descEvent);
        add(solo);
        add(duo);
        add(ca);

        btnAddevent.addActionListener(e -> {

            if (solo.isSelected()) {
                ServiceEvent.getInstance().addEvent(nomEvent.getText(), String.valueOf(new Date(ca.getSelectedDay())), lieuEvent.getText(), descEvent.getText(), solo.getText());

            }
            if (duo.isSelected()) {
                ServiceEvent.getInstance().addEvent(nomEvent.getText(), String.valueOf(new Date(ca.getSelectedDay())), lieuEvent.getText(), descEvent.getText(), duo.getText());

            }
        });
        add(btnAddevent);
            getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new HomeForm(res).show());
    }


}
