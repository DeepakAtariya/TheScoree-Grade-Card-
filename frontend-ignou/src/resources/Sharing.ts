import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
@Injectable()
export class Sharing {

    data : any;

    setData(data : any){
        this.data=data;
    }

    getData(){
        return this.data;
    }


}