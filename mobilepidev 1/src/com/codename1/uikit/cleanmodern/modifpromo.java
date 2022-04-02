/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.components.FloatingActionButton;
import com.codename1.components.MultiButton;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.codename1.uikit.cleanmodern.entities.*;
import com.codename1.uikit.cleanmodern.services.Promoservice;
import com.codename1.uikit.cleanmodern.utils.SessionManager;

/**
 *
 * @author MSI
 */
public class modifpromo extends BaseForm {
    public modifpromo(Resources res,promo p) {
        super(BoxLayout.y());
         Toolbar tb = new Toolbar(true);
        setToolbar(tb);

        tb.setTitle("Admin Space");
        tb.showToolbar();
          
           tb.showToolbar();
        tb.addMaterialCommandToSideMenu("Utilisateurs", FontImage.MATERIAL_ACCOUNT_BOX, e -> new AdminForm(res).show());
        tb.addMaterialCommandToSideMenu("Evenements", FontImage.MATERIAL_EVENT, e -> new HomeForm(res).show());
        tb.addMaterialCommandToSideMenu("Produits", FontImage.MATERIAL_SETTINGS, e -> new prodlist(res).show());
        tb.addMaterialCommandToSideMenu("Promo", FontImage.MATERIAL_SETTINGS, e -> new listpromo(res).show());
        tb.addMaterialCommandToSideMenu("Logout", FontImage.MATERIAL_EXIT_TO_APP, e -> {
            new SignInForm(res).show();
            SessionManager.pref.clearAll();

        });
/*        tb.setTitleCentered(false);
        Image profilePic = res.getImage("user-picture.jpg");
        Image mask = res.getImage("round-mask.png");
        profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
        Label profilePicLabel = new Label(profilePic, "ProfilePicTitle");
        profilePicLabel.setMask(mask.createMask());

        Button menuButton = new Button("");
        menuButton.setUIID("Title");
        FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
        menuButton.addActionListener(e -> getToolbar().openSideMenu());
        
        Container remainingTasks = BoxLayout.encloseY(
                        new Label("12", "CenterTitle"),
                        new Label("remaining tasks", "CenterSubTitle")
                );
        remainingTasks.setUIID("RemainingTasks");
        Container completedTasks = BoxLayout.encloseY(
                        new Label("32", "CenterTitle"),
                        new Label("completed tasks", "CenterSubTitle")
        );
        completedTasks.setUIID("CompletedTasks");

        Container titleCmp = BoxLayout.encloseY(
                        FlowLayout.encloseIn(menuButton),
                        BorderLayout.centerAbsolute(
                                BoxLayout.encloseY(
                                    new Label("Jennifer Wilson", "Title"),
                                    new Label("UI/UX Designer", "SubTitle")
                                )
                            ).add(BorderLayout.WEST, profilePicLabel),
                        GridLayout.encloseIn(2, remainingTasks, completedTasks)
                );
        
        FloatingActionButton fab = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
        fab.getAllStyles().setMarginUnit(Style.UNIT_TYPE_PIXELS);
        fab.getAllStyles().setMargin(BOTTOM, completedTasks.getPreferredH() - fab.getPreferredH() / 2);
        tb.setTitleComponent(fab.bindFabToContainer(titleCmp, CENTER, BOTTOM));*/
                        
        add(new Label("Today", "TodayTitle"));
          TextField reference = new TextField(p.getId()+"", "Reference", 20, TextField.TEXT_CURSOR) ;
     TextField nom = new TextField(p.getDate(), "Nom ", 20, TextField.TEXT_CURSOR) ;
           TextField prix = new TextField(p.getPourcent()+"", "", 20, TextField.NUMERIC) ;
                   

        Button btnValider = new Button("Modifier");
reference.setEditable(false);
        
        FontImage arrowDown = FontImage.createMaterial(FontImage.MATERIAL_KEYBOARD_ARROW_DOWN, "Label", 3);
          btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((reference.getText().length()==0)||(nom.getText().length()==0))
                    Dialog.show("Alert", "tous les champs sont obligatoire", new Command("OK"));
                else
                {
                    try {
                     promo ch = new promo(p.getId(),(int)Float.parseFloat(prix.toString()),nom.getText().toString());

                         if( Promoservice.getInstance().modifehotel(ch))
                        {
                             new prodlist(res).show();

                           Dialog.show("Success","Promo modifié",new Command("OK"));
                        }else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "NB etoile est un nombre", new Command("OK"));
                    }
                    
                }
                
                
            }

             
        });
         add(reference);
                add(nom);
                  add(prix);
 
add(btnValider);
    }
    
    private void addButtonBottom(Image arrowDown, String text, int color, boolean first) {
        MultiButton finishLandingPage = new MultiButton(text);
        finishLandingPage.setEmblem(arrowDown);
        finishLandingPage.setUIID("Container");
        finishLandingPage.setUIIDLine1("TodayEntry");
        finishLandingPage.setIcon(createCircleLine(color, finishLandingPage.getPreferredH(),  first));
        finishLandingPage.setIconUIID("Container");
        add(FlowLayout.encloseIn(finishLandingPage));
    }
    
    private Image createCircleLine(int color, int height, boolean first) {
        Image img = Image.createImage(height, height, 0);
        Graphics g = img.getGraphics();
        g.setAntiAliased(true);
        g.setColor(0xcccccc);
        int y = 0;
        if(first) {
            y = height / 6 + 1;
        }
        g.drawLine(height / 2, y, height / 2, height);
        g.drawLine(height / 2 - 1, y, height / 2 - 1, height);
        g.setColor(color);
        g.fillArc(height / 2 - height / 4, height / 6, height / 2, height / 2, 0, 360);
        return img;
    }


 
     
    
}
