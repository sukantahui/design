import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { MenuItemComponent } from './menu-item.component';

const routes: Routes = [{ path: '', component: MenuItemComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class MenuItemRoutingModule { }
