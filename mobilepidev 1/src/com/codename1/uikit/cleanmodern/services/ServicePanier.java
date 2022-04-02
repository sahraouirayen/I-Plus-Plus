/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.messaging.Message;
import com.codename1.ui.events.ActionListener;
import com.codename1.uikit.cleanmodern.entities.Panier;
import com.codename1.uikit.cleanmodern.utils.Statics;

import java.io.IOException;
import java.util.Date;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author SIHEM
 */
public class ServicePanier {

    public ArrayList<Panier> paniers;

    public static ServicePanier instance = null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServicePanier() {
        req = new ConnectionRequest();
    }

    public static ServicePanier getInstance() {
        if (instance == null) {
            instance = new ServicePanier();
        }
        return instance;
    }

    public ArrayList<Panier> parsePanies(String jsonText) {
        try {

            System.out.println(jsonText);
            paniers = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            for (Map<String, Object> obj : list) {
                Panier a = new Panier();
                String test = obj.get("produit").toString();
                System.out.println(test);
                a.setPrix(Float.parseFloat(test.substring((test).indexOf("prixProd=") + 9, (test).indexOf(", statusProd"))));
                a.setTitle(test.substring((test).indexOf("nomProd=") + 8, (test).indexOf(", prixProd")));
                String bbb = test.substring((test).indexOf("id="));
                System.out.println("panierrrr aaaaaaa"+test.substring((test).indexOf("id=") + 3, (test).indexOf(", nomProd")));
                float id = Float.parseFloat(test.substring((test).indexOf("id=") + 3, (test).indexOf(", nomProd")));
                a.setId_prod((int) id);
                float quantityProduit = Float.parseFloat(test.substring((test).indexOf("quantite") + 9, (test).indexOf(", prixProd")));
                a.setQuantiteProd((int) quantityProduit);
                float quantity = Float.parseFloat(obj.get("quantite").toString());
                a.setQuantite((int) quantity);
                a.setTotal(Float.parseFloat(obj.get("total").toString()));
                paniers.add(a);

            }
        } catch (IOException ex) {

        }
        return paniers;
    }

    public ArrayList<Panier> getAllPanier() {
        String url = Statics.BASE_URL + "affmobPanier";
        req.setUrl(url);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                paniers = parsePanies(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return paniers;
    }

    public ArrayList<Panier> getUser(int id) {
        String url = Statics.BASE_URL + "/findusermob/?id=" + id;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                paniers = parsePanies(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return paniers;
    }

    public ArrayList<Panier> Login(String username, String pwd) {
        paniers = null;
        String url = Statics.BASE_URL + "loginmobile?username=" + username + "&pwd=" + pwd;
        System.out.println(url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                paniers = parsePanies(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return paniers;
    }

    public boolean addPanier(String prod) {
        String url = Statics.BASE_URL + "paniermobile/new?id_produit=" + prod; //création de l'URL
        req.setUrl(url);
        System.out.println(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
    public boolean addCommande(ArrayList p) {
        String url = Statics.BASE_URL + "panier/add?panier=" + p; //création de l'URL
        req.setUrl(url);
        System.out.println(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public boolean editPanier(Panier u) {
        String url = Statics.BASE_URL + "paniermob/edit?id_produit=" + u.getId_prod() + "&quantity=" + u.getQuantite() + "&total=" + u.getTotal();
        req.setUrl(url);
        System.out.println(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public boolean deletePanier(Panier fi) {
        String url = Statics.BASE_URL + "Panier/del?id_produit=" + fi.getId_prod();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

}
