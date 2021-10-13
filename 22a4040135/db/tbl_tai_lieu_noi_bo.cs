using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace A
{
    #region Tbl_tai_lieu_noi_bo
    public class Tbl_tai_lieu_noi_bo
    {
        #region Member Variables
        protected int _tai_lieu_noi_bo_id;
        protected int _phong_ban_id;
        protected string _ten_tai_lieu;
        protected unknown _ngay_ban_hanh;
        protected string _link_tai_ve;
        protected string _ghi_chu;
        #endregion
        #region Constructors
        public Tbl_tai_lieu_noi_bo() { }
        public Tbl_tai_lieu_noi_bo(int phong_ban_id, string ten_tai_lieu, unknown ngay_ban_hanh, string link_tai_ve, string ghi_chu)
        {
            this._phong_ban_id=phong_ban_id;
            this._ten_tai_lieu=ten_tai_lieu;
            this._ngay_ban_hanh=ngay_ban_hanh;
            this._link_tai_ve=link_tai_ve;
            this._ghi_chu=ghi_chu;
        }
        #endregion
        #region Public Properties
        public virtual int Tai_lieu_noi_bo_id
        {
            get {return _tai_lieu_noi_bo_id;}
            set {_tai_lieu_noi_bo_id=value;}
        }
        public virtual int Phong_ban_id
        {
            get {return _phong_ban_id;}
            set {_phong_ban_id=value;}
        }
        public virtual string Ten_tai_lieu
        {
            get {return _ten_tai_lieu;}
            set {_ten_tai_lieu=value;}
        }
        public virtual unknown Ngay_ban_hanh
        {
            get {return _ngay_ban_hanh;}
            set {_ngay_ban_hanh=value;}
        }
        public virtual string Link_tai_ve
        {
            get {return _link_tai_ve;}
            set {_link_tai_ve=value;}
        }
        public virtual string Ghi_chu
        {
            get {return _ghi_chu;}
            set {_ghi_chu=value;}
        }
        #endregion
    }
    #endregion
}