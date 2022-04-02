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
import com.codename1.ui.events.ActionListener;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import com.codename1.uikit.cleanmodern.entities.*;
import com.codename1.uikit.cleanmodern.utils.Statics;


/**
 *
 * @author MSI
 */
public class Promoservice {
     public ArrayList<promo> promo;

    public static Promoservice instance = null;
    public boolean resultOK;
    private ConnectionRequest req;

    public Promoservice() {
        req = new ConnectionRequest();
    }

    public static Promoservice getInstance() {
        if (instance == null) {
            instance = new Promoservice();
        }
        return instance;
    }
       public boolean addhotel(promo t) {
        System.out.println(t);
        System.out.println("********");
       //String url = Statics.BASE_URL + "create?name=" + t.getName() + "&status=" + t.getStatus();
       String url = Statics.BASE_URL + "addprod";
    
       req.setUrl(url);
       req.setPost(false);
     
   
         req.addArgument("pourcen",t.getPourcent()+"");
         req.addArgument("date",t.getDate());

       
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
    public ArrayList<promo> parsehotel(String jsonText){
        try {
            promo =new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> hotelListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)hotelListJson.get("root");
            
            for(Map<String,Object> obj : list){
                
                promo h = new promo();
                   h.setPourcent(((int)Float.parseFloat(obj.get("pourcentPromo").toString())));
                   h.setDate(obj.get("dateExp").toString());

 
                promo.add(h);
 
            }
            
            
        } catch (IOException ex) {
            
        }
        return promo;
    }
    
    
     

    public ArrayList<promo> getAllhotels() {
        req = new ConnectionRequest();
         String url = Statics.BASE_URL + "listeprom/";
         req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
                        @Override

            public void actionPerformed(NetworkEvent evt) {
                                 promo = parsehotel(new String(req.getResponseData()));

                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
 
        return promo;
    }
 
       public void DelPant(int id){
       ConnectionRequest con = new ConnectionRequest();
       String url = Statics.BASE_URL+"suppprom/"+id;
       con.setUrl(url);
       con.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                con.removeResponseListener(this);
            }
       });
       NetworkManager.getInstance().addToQueueAndWait(con);
   }
        public boolean modifehotel(promo t) {
        System.out.println(t);
        System.out.println("********");
       //String url = Statics.BASE_URL + "create?name=" + t.getName() + "&status=" + t.getStatus();
       String url = Statics.BASE_URL + "editprommob/"+t.getId();
    
       req.setUrl(url);
       req.setPost(false);
      req.addArgument("pourcen",t.getPourcent()+"");
         req.addArgument("date",t.getDate());

       
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
