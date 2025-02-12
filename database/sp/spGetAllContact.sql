DELIMITER //

CREATE PROCEDURE spGetAllContact()
BEGIN
    SELECT 
        LEVE.Naam AS LeverancierNaam,
        LEVE.ContactPersoon AS ContactPersoon,
        CONT.Straat AS StraatNaam,
        CONT.Huisnummer AS HuisNummer,
        CONT.Postcode AS Postcode,
        CONT.Stad AS Stad
    FROM 
        leverancier LEVE
    INNER JOIN 
        contact CONT ON LEVE.Id = CONT.Id;
END //

DELIMITER ;