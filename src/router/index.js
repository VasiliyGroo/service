import { createRouter, createWebHistory } from "vue-router";
import Service from "../views/Service.vue";
import ActOfFixing from "../views/ActOfFixing.vue";
import ActSectionCorpus from "../views/ActSectionCorpus.vue";
import ActSectionCorpus2 from "../views/ActSectionCorpus2.vue";
import ActSectionCorpus3 from "../views/ActSectionCorpus3.vue";
import ActSectionCorpus4 from "../views/ActSectionCorpus4.vue";
import ActSectionCorpus5 from "../views/ActSectionCorpus5.vue";
import ActSectionCorpus6 from "../views/ActSectionCorpus6.vue";
import ActSectionCorpus7 from "../views/ActSectionCorpus7.vue";
import ActSectionCorpus8 from "../views/ActSectionCorpus8.vue";
import ActSectionCorpus9 from "../views/ActSectionCorpus9.vue";
import ActSectionCorpus10 from "../views/ActSectionCorpus10.vue";
import ActSectionCorpus11 from "../views/ActSectionCorpus11.vue";
import ActSectionCorpus12 from "../views/ActSectionCorpus12.vue";
import ActSectionCorpus13 from "../views/ActSectionCorpus13.vue";
import ActSectionCorpus14 from "../views/ActSectionCorpus14.vue";
import ActSectionCorpus15 from "../views/ActSectionCorpus15.vue";
import ActSectionCorpus16 from "../views/ActSectionCorpus16.vue";
import ActSectionCorpus17 from "../views/ActSectionCorpus17.vue";
import ActSectionCorpus18 from "../views/ActSectionCorpus18.vue";
import ActSectionCorpus19 from "../views/ActSectionCorpus19.vue";
import ActSectionCorpus20 from "../views/ActSectionCorpus20.vue";
import Deratization from "../views/Deratization.vue";
import InformationBoards from "../views/InformationBoards.vue";
import InvitationToDrawUpAnAct from "../views/InvitationToDrawUpAnAct.vue";

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: "/service/",
      component: Service,
    },
    {
      path: "/service/deratization",
      component: Deratization,
    },
    {
      path: "/service/act-of-fixing",
      component: ActOfFixing,
    },
    {
      path: "/service/act-corpus-section",
      component: ActSectionCorpus,
    },
    {
      path: "/service/act-corpus-section2",
      component: ActSectionCorpus2,
    },
    {
      path: "/service/act-corpus-section3",
      component: ActSectionCorpus3,
    },
    {
      path: "/service/act-corpus-section4",
      component: ActSectionCorpus4,
    },
    {
      path: "/service/act-corpus-section5",
      component: ActSectionCorpus5,
    },
    {
      path: "/service/act-corpus-section6",
      component: ActSectionCorpus6,
    },
    {
      path: "/service/act-corpus-section7",
      component: ActSectionCorpus7,
    },
    {
      path: "/service/act-corpus-section8",
      component: ActSectionCorpus8,
    },
    {
      path: "/service/act-corpus-section9",
      component: ActSectionCorpus9,
    },
    {
      path: "/service/act-corpus-section10",
      component: ActSectionCorpus10,
    },
    {
      path: "/service/act-corpus-section11",
      component: ActSectionCorpus11,
    },
    {
      path: "/service/act-corpus-section12",
      component: ActSectionCorpus12,
    },
    {
      path: "/service/act-corpus-section13",
      component: ActSectionCorpus13,
    },
    {
      path: "/service/act-corpus-section14",
      component: ActSectionCorpus14,
    },
    {
      path: "/service/act-corpus-section15",
      component: ActSectionCorpus15,
    },
    {
      path: "/service/act-corpus-section16",
      component: ActSectionCorpus16,
    },
    {
      path: "/service/act-corpus-section17",
      component: ActSectionCorpus17,
    },
    {
      path: "/service/act-corpus-section18",
      component: ActSectionCorpus18,
    },
    {
      path: "/service/act-corpus-section19",
      component: ActSectionCorpus19,
    },
    {
      path: "/service/act-corpus-section20",
      component: ActSectionCorpus20,
    },
    {
      path: "/service/information-boards",
      component: InformationBoards,
    },
    {
      path: "/service/invitation-to-draw-up-an-act",
      component: InvitationToDrawUpAnAct,
    },
  ],
});

export default router;
